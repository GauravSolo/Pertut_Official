<?php
include "../config.inc.php"; 
$teacher_id = $_SESSION["id"];

if (isset($_POST['fetch_enrollments']) && $_POST['fetch_enrollments'] == "enrollments") {
    $query = "
        SELECT 
            e.enrollment_id, 
            e.student_id, 
            s.Full_Name AS student_name, 
            e.course_id, 
            c.course_name, 
            c.course_price, 
            e.status, 
            e.enrollment_date, 
            e.payment_id 
        FROM enrollments e
        JOIN students s ON e.student_id = s.Id
        JOIN courses c ON e.course_id = c.course_id
        WHERE e.status = 1 AND e.teacher_id = '$teacher_id';";

    $error = 0; 
    $enrolls = "";

    try {
        $st = $db->prepare($query);
        $st->execute();

        $enrollment_data = $st->fetchAll(PDO::FETCH_ASSOC);
        $i = 1;
        foreach($enrollment_data as $enrollment){
            $status = "Expired";
            if($enrollment['status'] == 1) $status = "Active";
            $enrolls .= "<tr>
                            <td>".$i++."</td>
                            <td>" . htmlspecialchars($enrollment['enrollment_id']) . "</td>
                            <td>" . htmlspecialchars($enrollment['student_id']) . "</td>
                            <td>" . htmlspecialchars($enrollment['student_name']) . "</td>
                            <td>" . htmlspecialchars($enrollment['course_id']) . "</td>
                            <td>" . htmlspecialchars($enrollment['course_name']) . "</td>
                            <td> ₹" . htmlspecialchars($enrollment['course_price']) . "</td>
                            <td>" . $status . "</td>
                            <td>" . htmlspecialchars($enrollment['enrollment_date']) . "</td>
                            <td>" . htmlspecialchars($enrollment['payment_id']) . "</td>
                        </tr>";
        }
    } catch (Throwable $th) {
        $error = 1;
    }

    echo json_encode(array("error" => $error, "enrollments" => $enrolls));
    $db = null;
    die();
}


if (isset($_POST['fetch_sales_and_enrollments']) && $_POST['fetch_sales_and_enrollments'] == "data") {
    $sales_query = "
        SELECT 
            SUM(c.course_price) AS total_sales, 
            COUNT(e.enrollment_id) AS total_enrollments
        FROM 
            enrollments e
        JOIN 
            courses c ON e.course_id = c.course_id
        WHERE 
            e.status = 1 AND e.teacher_id = '$teacher_id';";

    $error = 0;
    $total_sales = 0;
    $total_enrollments = 0;

    try {
        $st = $db->prepare($sales_query);
        $st->execute();

        $data = $st->fetch(PDO::FETCH_ASSOC);
        $total_sales = $data['total_sales'] ?: 0;
        $total_enrollments = $data['total_enrollments'] ?: 0;
    } catch (Throwable $th) {
        $error = 1;
    }

    echo json_encode(array(
        "error" => $error,
        "total_sales" => number_format($total_sales, 2),
        "total_enrollments" => $total_enrollments
    ));
    $db = null;
    die();
}

if (isset($_POST['create_course']) && $_POST['create_course'] == "course") {
    $course_code = $_POST['course_code'];
    $course_name = $_POST['course_name'];
    $course_price = $_POST['course_price'];
    $course_description = $_POST['course_description'];
    $course_duration = $_POST['course_duration'];
    $teacher_id = $_SESSION["id"];

    if (empty($course_code) || empty($course_name) || empty($course_price) || empty($course_duration)) {
        echo json_encode(array("error" => 1, "message" => "All fields are required."));
        exit;
    }

    $query = "INSERT INTO courses (course_code,teacher_id, course_name, course_price, course_description, course_duration, `status`) 
              VALUES (:course_code,:teacher_id, :course_name, :course_price, :course_description, :course_duration, 1)"; // Status 1 for active

    try {
        $stmt = $db->prepare($query);
        $stmt->bindParam(':course_code', $course_code);
        $stmt->bindParam(':teacher_id', $teacher_id);
        $stmt->bindParam(':course_name', $course_name);
        $stmt->bindParam(':course_price', $course_price);
        $stmt->bindParam(':course_description', $course_description);
        $stmt->bindParam(':course_duration', $course_duration);

        if ($stmt->execute()) {
            echo json_encode(array("error" => 0, "message" => "Course created successfully!"));
        } else {
            echo json_encode(array("error" => 1, "message" => "Failed to create course. Please try again."));
        }
    } catch (PDOException $e) {
        echo json_encode(array("error" => 1, "message" => "Error: " . $e->getMessage()));
    }
    $db = null;
    die();
}


if (isset($_POST['fetch_chat_history']) && $_POST['fetch_chat_history'] == "data") {
    // Extract parameters from POST request
    $sender_id = $_POST['sender_id'];
    $receiver_id = $_POST['receiver_id'];
    $sender_role = $_POST['sender_role'];
    $receiver_role = $_POST['receiver_role'];

    $error = 0;
    $messages = [];

    try {
        $stmt = $db->prepare("
            SELECT m.*, 
                -- Sender Name and Avatar
                CASE 
                    WHEN m.sender_role = 'student' THEN s.Full_Name
                    WHEN m.sender_role = 'teacher' THEN t.name
                END AS sender_name,
                CASE 
                    WHEN m.sender_role = 'student' THEN s.Profile_Pic
                    WHEN m.sender_role = 'teacher' THEN t.profile_picture
                END AS sender_avatar,
                
                -- Receiver Name and Avatar
                CASE 
                    WHEN m.receiver_role = 'student' THEN s2.Full_Name
                    WHEN m.receiver_role = 'teacher' THEN t2.name
                END AS receiver_name,
                CASE 
                    WHEN m.receiver_role = 'student' THEN s2.Profile_Pic
                    WHEN m.receiver_role = 'teacher' THEN t2.profile_picture
                END AS receiver_avatar

            FROM messages m

            -- Join for sender (check role)
            LEFT JOIN students s ON m.sender_id = s.id AND m.sender_role = 'student'
            LEFT JOIN teachers t ON m.sender_id = t.teacher_id AND m.sender_role = 'teacher'
            
            -- Join for receiver (check role)
            LEFT JOIN students s2 ON m.receiver_id = s2.id AND m.receiver_role = 'student'
            LEFT JOIN teachers t2 ON m.receiver_id = t2.teacher_id AND m.receiver_role = 'teacher'

            -- Filter messages based on sender and receiver
            WHERE ((m.sender_id = :sender_id AND m.sender_role = :sender_role) 
                AND (m.receiver_id = :receiver_id AND m.receiver_role = :receiver_role)) 
                OR ((m.sender_id = :receiver_id AND m.sender_role = :receiver_role) 
                AND (m.receiver_id = :sender_id AND m.receiver_role = :sender_role))
               
            -- Order messages by timestamp in ascending order
            ORDER BY m.timestamp ASC
        ");

        // Bind parameters
        $stmt->bindParam(':sender_id', $sender_id);
        $stmt->bindParam(':receiver_id', $receiver_id);
        $stmt->bindParam(':sender_role', $sender_role);
        $stmt->bindParam(':receiver_role', $receiver_role);

        // Execute the query
        $stmt->execute();

        // Fetch all the messages
        $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (Throwable $th) {
        $error = 1;
    }

    // Format the response
    $response = array(
        "error" => $error,
        "messages" => $messages
    );

    // Output the JSON response
    echo json_encode($response);
    $db = null;
    die();
}

if (isset($_POST['fetch_chat_participants']) && $_POST['fetch_chat_participants'] == "data") {
    $teacher_id = $_POST['user_id'];  
    
    $participants = [];
    
    try {
        $stmt = $db->prepare("
            SELECT DISTINCT 
                CASE 
                    WHEN sender_id = :teacher_id THEN receiver_id
                    ELSE sender_id
                END AS participant_id,
                CASE 
                    WHEN sender_id = :teacher_id THEN receiver_role
                    ELSE sender_role
                END AS participant_role
            FROM messages
            WHERE sender_id = :teacher_id OR receiver_id = :teacher_id
        ");
        
        // Bind the teacher's ID to the query
        $stmt->bindParam(':teacher_id', $teacher_id);
        
        // Execute the query
        $stmt->execute();

        // Fetch participants (user_ids who interacted with the teacher)
        $participantsData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Loop through participants and fetch their details (name, avatar, etc.)
        foreach ($participantsData as $participant) {
            $participantId = $participant['participant_id'];
            $role = $participant['participant_role'];

            // Query to get participant details (name and avatar)
            if ($role == 'student') {
                // Fetch student details
                $stmt = $db->prepare("SELECT Full_Name, Profile_Pic FROM students WHERE id = :participant_id");
            } else {
                // Fetch teacher details
                $stmt = $db->prepare("SELECT name AS Full_Name, profile_picture AS Profile_Pic FROM teachers WHERE teacher_id = :participant_id");
            }

            // Bind participant ID to the query
            $stmt->bindParam(':participant_id', $participantId);
            $stmt->execute();
            
            // Fetch participant details
            $participantDetails = $stmt->fetch(PDO::FETCH_ASSOC);

            // Add participant details to the result
            $participants[] = [
                'name' => $participantDetails['Full_Name'],
                'avatar' => $participantDetails['Profile_Pic'] ?: 'https://bootdey.com/img/Content/avatar/avatar3.png', // Default avatar if none found
                'participant_id' => $participantId,
                'role' => $role // Include role (student or teacher)
            ];
        }
    } catch (Throwable $th) {
        // Handle errors
        $error = 1;
    }

    // Send the response as JSON
    $response = [
        'error' => isset($error) ? $error : 0,
        'participants' => $participants
    ];

    echo json_encode($response);
    $db = null;
    die();
}



    $query = "SELECT * FROM courses WHERE `status` = 1 AND teacher_id = '$teacher_id'"; 
    
    $error = 0;
    $courses = [];
    
    try {
        $st = $db->prepare($query);
        $st->execute();
    
        $courses = $st->fetchAll(PDO::FETCH_ASSOC);
    } catch (Throwable $th) {
        $error = 1;
    }
    echo json_encode(array("error" => $error, "courses" => $courses));
?>