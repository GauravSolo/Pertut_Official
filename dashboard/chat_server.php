<?php
require dirname(__DIR__) . '/vendor/autoload.php';

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;

class Chat implements MessageComponentInterface {
    protected $clients;  // Now use an associative array to store connections
    protected $ch_db;

    public function __construct() {
        // Initialize WebSocket clients storage
        $this->clients = [];

        // Initialize Database connection
        require require __DIR__ . '/../config.inc.php';
        $this->ch_db = $db;  // Assuming $db is your PDO connection
    }

    public function onOpen(ConnectionInterface $conn) {
        // Get query parameters from the connection URL (sender_id and receiver_id)
        $queryParams = $conn->httpRequest->getUri()->getQuery();
        parse_str($queryParams, $params);

        $sender_id = isset($params['sender_id']) ? $params['sender_id'] : null;
        $receiver_id = isset($params['receiver_id']) ? $params['receiver_id'] : null;

        if ($sender_id && $receiver_id) {
            // Create a unique channel based on the sender_id and receiver_id
            $channel = "chat_{$sender_id}_{$receiver_id}";
            echo "channel created ".$channel;
            // Store the connection object in the clients array with the channel as the key
            if (!isset($this->clients[$channel])) {
                $this->clients[$channel] = [];
            }

            $this->clients[$channel][$conn->resourceId] = $conn;
        } else {
            // Handle missing sender_id or receiver_id (e.g., send an error or close the connection)
            $conn->send(json_encode(['error' => 'Missing sender or receiver ID']));
            $conn->close();
        }
    }

    public function onClose(ConnectionInterface $conn) {
        // Loop through all channels to find the connection and remove it
        foreach ($this->clients as $channel => $connections) {
            if (isset($connections[$conn->resourceId])) {
                unset($this->clients[$channel][$conn->resourceId]);
            }
        }
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        echo "Message received: $msg\n";
        $data = json_decode($msg, true);

        if (isset($data['sender_id']) && isset($data['receiver_id']) && isset($data['message_content'])) {
            $sender_id = $data['sender_id'];
            $receiver_id = $data['receiver_id'];
            $message_content = $data['message_content'];
            $message_type = isset($data['message_type']) ? $data['message_type'] : 'text';
            $attachment_url = isset($data['attachment_url']) ? $data['attachment_url'] : NULL;

            // Insert the message into the database
            $stmt = $this->ch_db->prepare("INSERT INTO messages (sender_id, receiver_id, sender_role, receiver_role, message_content, message_type, attachment_url) 
                VALUES (:sender_id, :receiver_id, :sender_role, :receiver_role, :message_content, :message_type, :attachment_url)");

            $stmt->bindParam(':sender_id', $sender_id);
            $stmt->bindParam(':receiver_id', $receiver_id);
            $stmt->bindParam(':sender_role', $data['sender_role']);
            $stmt->bindParam(':receiver_role', $data['receiver_role']);
            $stmt->bindParam(':message_content', $message_content);
            $stmt->bindParam(':message_type', $message_type);
            $stmt->bindParam(':attachment_url', $attachment_url);
            $stmt->execute();

            // Add timestamp
            $data['timestamp'] = date("Y-m-d H:i:s");

            // Construct the channel identifier
            $channel = "chat_{$sender_id}_{$receiver_id}";
            echo "current channel ".$channel.' - '.isset($this->clients[$channel]);
            
            if (isset($this->clients[$channel])) {
                foreach ($this->clients[$channel] as $client) {
                    $client->send(json_encode($data));  // Send the message to the client in that chat room
                }
            }
            $from->send(json_encode($data));
        } else {
            // Invalid message format
            $from->send(json_encode(['error' => 'Invalid message format']));
        }
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "Error: {$e->getMessage()}\n";
        $conn->close();
    }
}

// Start the WebSocket server
$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Chat()
        )
    ),
    8080
);

echo "WebSocket server running at ws://localhost:8080\n";
$server->run();
?>
