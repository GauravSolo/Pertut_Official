<?php
// if (file_exists(__DIR__ . '/.env')) {
//   require_once __DIR__ . '/vendor/autoload.php';
//   $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  
//   $dotenv->load();
  
//   putenv("DBNAME=" . $_ENV['DBNAME']);
//   putenv("DBUSER=" . $_ENV['DBUSER']);
//   putenv("DBPASS=" . $_ENV['DBPASS']);
//   putenv("DBHOST=" . $_ENV['DBHOST']);
// }


date_default_timezone_set('Asia/Kolkata');
session_start();

// define('DBNAME', 'b0przwsvp6iwcuhxgemq');
// define('DBUSER', 'ubosbrgnn4o0wpov');
// define('DBPASS', 'l1feG6PmkXJQjHmIkwKE');
// define('DBHOST', 'b0przwsvp6iwcuhxgemq-mysql.services.clever-cloud.com');

define('DBNAME', 'pertut');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBHOST', 'localhost');
$db = null;
try {
    $db = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME, DBUSER, DBPASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Issue -> Connection failed: " . $e->getMessage();
}
?>
