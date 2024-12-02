<?php


ini_set("display_errors",1);
error_reporting(E_ALL);

include "config.inc.php";

if(isset($_POST["sitedata"])){

    $query1 = "SELECT COUNT(id) as student FROM students";
    $query2 = "SELECT COUNT(teacher_id) as teacher FROM teachers";

    $st1 = $db->prepare($query1);
    $st2 = $db->prepare($query2);

    $st1->execute();
    $st2->execute();

    $student = $st1->fetch();
    $teacher = $st2->fetch();


    $res = array("student"=>$student["student"],"teacher"=>$teacher["teacher"]);

    echo json_encode(array("res"=>$res));
    $db=null;
    die();

}

if(isset($_POST["checkusername"]) && $_POST["checkusername"] == "username"){

    $username = strtolower($_POST["username"]);
    $phone = $_POST["phone"];
    $category = $_POST["category"];
    $query1 = "SELECT Id FROM students WHERE Lower(Username) = '$username' OR Phone_Number = '$phone'";
    if($category == "teacher"){
        $query1 = "SELECT teacher_id as Id FROM teachers WHERE Lower(t_username) = '$username' OR phone = '$phone'";
    }

    $st1 = $db->prepare($query1);
    $st1->execute();

    $row = $st1->rowCount();

    $error = 1;

    if($row != 0){
        $error = 1;
    }else{
        $error = 0;
    }

    echo json_encode(array("error"=>$error));
    $db=null;
    die();

}
if(isset($_POST["changeImage"]) && $_POST["changeImage"] == "image"){

    $url = $_POST["url"];
    $size = $_POST["size"];
 
    $query1 = "UPDATE students SET Profile_Pic = '$url', Profile_Size = '$size' WHERE Id = '$_SESSION[id]'";
    if($_SESSION["cat"] == "teacher"){
        $query1 = "UPDATE teachers SET profile_picture = '$url' WHERE teacher_id = '$_SESSION[id]'";
    }

    $st1 = $db->prepare($query1);

    try {
        //code...
        $st1->execute();
        $error = 0;

        $_SESSION["dp"] = $url;
        
    } catch (\Throwable $th) {
        //throw $th;
        $error = 1;
    }

    echo json_encode(array("error"=>$error));
    $db=null;
    die();

}
if(isset($_POST["fetchProfilePic"]) && $_POST["fetchProfilePic"] == "pic"){
 
    $query1 = "SELECT Profile_Pic FROM students  WHERE Id = '$_SESSION[id]'";
    if($_SESSION["cat"] == "teacher")
        $query1 = "SELECT profile_picture as Profile_Pic FROM teachers  WHERE teacher_id = '$_SESSION[id]'";

    $st1 = $db->prepare($query1);

    try {
        //code...
        $st1->execute();
        $row = $st1->fetch();
        
        $_SESSION["dp"] = $row["Profile_Pic"];
        $url = $row["Profile_Pic"];
        
        $error = 0;
        
    } catch (\Throwable $th) {
        //throw $th;
        $error = 1;
    }

    echo json_encode(array("error"=>$error,"url"=>$url));
    $db=null;
    die();

}



if (isset($_POST["setUserEnrollment"]) && $_POST["setUserEnrollment"] == "enrollment") {

    $student_id = $_SESSION["id"];
    $teacher_id = $_POST["teacher_id"];
    $course_id = $_POST["course_id"];
    $payment_id = $_POST["payment_id"];

    if (empty($payment_id) || empty($teacher_id) || empty($course_id)) {
        echo json_encode(array("error" => 1, "message" => "Missing required inputs."));
        $db = null;
        die();
    }

    $checkQuery = "SELECT * FROM enrollments WHERE student_id = :student_id AND course_id = :course_id";
    $checkStmt = $db->prepare($checkQuery);
    $checkStmt->bindParam(':student_id', $student_id, PDO::PARAM_INT);
    $checkStmt->bindParam(':course_id', $course_id, PDO::PARAM_INT);
    
    try {
        $checkStmt->execute();
        if ($checkStmt->rowCount() > 0) {
            echo json_encode(array("error" => 1, "message" => "You are already enrolled in this course."));
            $db = null;
            die();
        }
    } catch (Throwable $th) {
        echo json_encode(array("error" => 1, "message" => "Error checking enrollment.", "details" => $th->getMessage()));
        $db = null;
        die();
    }

    $enrollQuery = "
        INSERT INTO enrollments (student_id, course_id, teacher_id, payment_id, enrollment_date)
        VALUES (:student_id, :course_id, :teacher_id, :payment_id, NOW())
    ";
    $enrollStmt = $db->prepare($enrollQuery);

    try {
        $enrollStmt->bindParam(':student_id', $student_id, PDO::PARAM_INT);
        $enrollStmt->bindParam(':course_id', $course_id, PDO::PARAM_INT);
        $enrollStmt->bindParam(':teacher_id', $teacher_id, PDO::PARAM_INT);
        $enrollStmt->bindParam(':payment_id', $payment_id, PDO::PARAM_STR);
        
        $enrollStmt->execute();

        echo json_encode(array("error" => 0, "message" => "Enrollment successful."));
    } catch (Throwable $th) {
        echo json_encode(array("error" => 1, "message" => "Error enrolling in course.", "details" => $th->getMessage()));
    }

    $db = null;
    die();
}


if(isset($_POST["updateProfileData"]) && $_POST["updateProfileData"] == "profiledata"){

    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    
 
    $query1 = "UPDATE students SET Full_Name = '$fullname', Email = '$email', Phone_Number = '$phone' WHERE Id = '$_SESSION[id]' AND `Password` = '$password'";
    if($_SESSION["cat"] == "teacher")
        $query1 = "UPDATE teachers SET `name` = '$fullname', email = '$email', `phone` = '$phone' WHERE teacher_id = '$_SESSION[id]' AND `password_hash` = '$password'";
    $st1 = $db->prepare($query1);

    try {
        //code...
        $st1->execute();
        
        if ($st1->rowCount() == 0) {
            $error = 1;
         }else{
             $_SESSION["fullname"] = $fullname;
             $_SESSION["email"] = $email;
             $_SESSION["phone"] = $phone;
             $error = 0;
         }


    } catch (\Throwable $th) {
        //throw $th;
        $error = 1;
    }

    echo json_encode(array("error"=>$error));
    $db=null;
    die();

}

if(isset($_POST["checkCredentials"]) && $_POST["checkCredentials"] == "user"){

    $username = strtolower($_POST["username"]);
    $password = $_POST["password"];
    $category = $_POST["category"];

    $query1 = "SELECT Id,`Full_Name` as `name`,`Username` as username,Phone_Number as phone, Email as email, `Role`,`Profile_Pic` as dp FROM students WHERE Lower(Username)= '$username' AND `Password` = '$password'";

    if($category == "teacher")
        $query1 = "SELECT teacher_id as Id,`name`,`t_username` as username, phone, Email as email,`profile_picture` as dp FROM teachers WHERE Lower(t_username)= '$username' AND `password_hash` = '$password'";

    $st1 = $db->prepare($query1);
    $st1->execute();
    $row = $st1->fetch();

    $error = 1;

    if($st1->rowCount()<=0){
        $error = 1;
    }else{
        $error = 0;

        $_SESSION["id"] = $row["Id"]; 
        $_SESSION["fullname"] = $row["name"]; 
        $_SESSION["username"] = $row["username"]; 
        $_SESSION["role"] = $category == "Student"?$row["Role"]:-1; 
        $_SESSION["dp"] = $row["dp"]; 
        $_SESSION["email"] = $row["email"]; 
        $_SESSION["phone"] = $row["phone"]; 
        $_SESSION["cat"] = $category; 

        $sub_query = "
            UPDATE enrollments e
            JOIN courses c ON e.course_id = c.course_id
            SET e.status = -1
            WHERE DATE_ADD(e.enrollment_date, INTERVAL c.course_duration MONTH) < CURDATE()
            AND e.status != -1
            ";

        try {
        $sub_st = $db->prepare($sub_query);
        $sub_st->execute();
        } catch (Throwable $th) {
        }


    }

    echo json_encode(array("error"=>$error,"user"=>isset($row["name"])?$row["name"]:""));
    $db=null;
    die();

}



if (isset($_POST["submit"]) && $_POST["submit"] == "submit") {

    $fullname = $_POST["fullname"];
    $phonenumber = $_POST["phonenumber"];
    $email = $_POST["email"];
    $category = $_POST["category"];
    $gender = "male";
    $username = $_POST["username"];
    $password = $_POST["enteredpass"];
    $inputState = $_POST["inputState"];
    $inputDistrict = $_POST["inputDistrict"];
    $experience = $_POST["experience"];
    $bio = $_POST["bio"];
    $education = $_POST["education"];
    $subjects = $_POST["subjects"];

    $profilePic = ""; // Default image
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == 0) {
        $uploadedFile = $_FILES['profile_picture'];
        $targetDir = "userlogo/";
        $fileExtension = strtolower(pathinfo($uploadedFile['name'], PATHINFO_EXTENSION));
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($fileExtension, $allowedExtensions)) {
            $profilePic = uniqid('profile_') . '.' . $fileExtension;
            $targetFile = $targetDir . $profilePic;
            move_uploaded_file($uploadedFile['tmp_name'], $targetFile);
        }
    }

    $timestamp = date("Y-m-d H:i:s");

    $table = ($category == "teacher") ? "teachers" : "students";
    $idColumn = ($category == "teacher") ? "teacher_id" : "Id";

    $stmt = $db->prepare("SELECT MAX($idColumn) AS max_id FROM $table");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $nextId = ($row['max_id'] ?? 0) + 2; 

    if ($category == "teacher") {
        $query = "INSERT INTO teachers(`teacher_id`, `name`, email, phone, `t_username`, `password_hash`, gender, experience, bio, education, expertise, `profile_picture`, `created_at`)
                  VALUES(:id, :name, :email, :phone, :username, :password, :gender, :experience, :bio, :education, :subjects, :profilePic, :timestamp)";
    } else {
        $query = "INSERT INTO students(`Id`, `Full_Name`, Email, Phone_Number, `Username`, `Password`, Gender, `State`, `City`, `Profile_Pic`, `Timestamp`)
                  VALUES(:id, :name, :email, :phone, :username, :password, :gender, :state, :city, :profilePic, :timestamp)";
    }
    

    $stmt = $db->prepare($query);
    $stmt->bindParam(':id', $nextId);
    $stmt->bindParam(':name', $fullname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phonenumber);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':profilePic', $profilePic);
    $stmt->bindParam(':timestamp', $timestamp);

    if ($category == "teacher") {
        $stmt->bindParam(':experience', $experience);
        $stmt->bindParam(':bio', $bio);
        $stmt->bindParam(':education', $education);
        $stmt->bindParam(':subjects', $subjects);
    } else {
        $stmt->bindParam(':state', $inputState);
        $stmt->bindParam(':city', $inputDistrict);
    }

    try {
        $stmt->execute();
        $error = 0; // Success
    } catch (\Throwable $th) {
        $error = 1; // Failure
        echo $th->getmessage();
    }

    echo json_encode(array("res" => $error));
    $db = null;
    die();
}



if(isset($_POST["saveEmail"]) && $_POST["saveEmail"] == "email"){

    $email = $_POST["email"];

    $query = "INSERT INTO Emails(Email)VALUES('$email')";

    $stmt = $db->prepare($query);


    try {
        $stmt->execute();
        $error = 0;
    } catch (\Throwable $th) {
        $error = 1;
    }

    echo json_encode(array("res"=>$error));
    $db=null;
    die();
}


if(isset($_POST["fetchpertutusers"]) && $_POST["fetchpertutusers"] == "users"){


    $query1 = "SELECT *, DATE(`Timestamp`) as Joined FROM students";

    $st1 = $db->prepare($query1);
    $st1->execute();
    $rows = $st1->fetchAll();

    $error = 1;
    $table = "";
    $i = 1;
    foreach($rows as $row){


        $table .= "<tr>
                       <td>$i</td>
                       <td><a class=profile-pic href=#><img  src='../userlogo/$row[Profile_Pic]'  alt='user-img' width='36' class='img-circle'></a></td>
                       <td>$row[Username]</td>
                       <td>$row[Full_Name]</td>
                       <td>$row[Phone_Number]</td>
                       <td>$row[Email]</td>
                       <td>$row[City]</td>
                       <td>$row[Password]</td>
                       <td>$row[Profile_Size]</td>
                       <td>$row[Joined]</td>
                    </tr>";
        $i++;

    }

    if($table == ""){
        $error = 1;
    }else{
        $error = 0;
    }

    echo json_encode(array("error"=>$error,"res"=>$table));
    $db=null;
    die();

}





?>