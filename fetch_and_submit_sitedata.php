<?php


// ini_set("display_errors",1);
// error_reporting(E_ALL);

include "config.inc.php";

if(isset($_POST["sitedata"])){

    $query1 = "SELECT COUNT(id) as student FROM StudentAndTeacher WHERE Category = 'Student'";
    $query2 = "SELECT COUNT(id) as teacher FROM StudentAndTeacher WHERE Category = 'Teacher'";

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
    $email = strtolower($_POST["email"]);
 
    $query1 = "SELECT Id FROM StudentAndTeacher WHERE Lower(Username) = '$username' AND Lower(Email) = '$email'";

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
 
    $query1 = "UPDATE StudentAndTeacher SET Profile_Pic = '$url', Profile_Size = '$size' WHERE Id = '$_SESSION[id]'";

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
 
    $query1 = "SELECT Profile_Pic FROM StudentAndTeacher  WHERE Id = '$_SESSION[id]'";

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

if(isset($_POST["setUserPackage"]) && $_POST["setUserPackage"] == "package"){

    $type = $_POST["type"];
    $paymentid = $_POST["paymentid"];
 
    if(empty($paymentid))
    {
        echo json_encode(array("error"=>1));
        $db=null;
        die();
    }
    $query1 = "UPDATE StudentAndTeacher SET PackageType = '$type', PaymentId = '$paymentid' WHERE Id = '$_SESSION[id]'";

    $st1 = $db->prepare($query1);

    try {
        //code...
        $st1->execute();
        $error = 0;

        $_SESSION["type"] = $type;
        
    } catch (\Throwable $th) {
        //throw $th;
        $error = 1;
    }

    echo json_encode(array("error"=>$error));
    $db=null;
    die();

}

if(isset($_POST["updateProfileData"]) && $_POST["updateProfileData"] == "profiledata"){

    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    
 
    $query1 = "UPDATE StudentAndTeacher SET Full_Name = '$fullname', Email = '$email', Phone_Number = '$phone' WHERE Id = '$_SESSION[id]' AND `Password` = '$password'";

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

    $query1 = "SELECT Id,`Full_Name` as `name`,`Username` as username,Phone_Number as phone, Email as email, `Role`,`Profile_Pic` as dp , PackageType as type FROM StudentAndTeacher WHERE Lower(Username)= '$username' AND `Password` = '$password'";

    $st1 = $db->prepare($query1);
    $st1->execute();
    $row = $st1->fetch();

    $error = 1;

    if($row["Id"] == null){
        $error = 1;
    }else{
        $error = 0;

        $_SESSION["id"] = $row["Id"]; 
        $_SESSION["fullname"] = $row["name"]; 
        $_SESSION["username"] = $row["username"]; 
        $_SESSION["role"] = $row["Role"]; 
        $_SESSION["dp"] = $row["dp"]; 
        $_SESSION["email"] = $row["email"]; 
        $_SESSION["phone"] = $row["phone"]; 
        $_SESSION["type"] = $row["type"]; 
    }

    echo json_encode(array("error"=>$error,"user"=>explode(" ",$row["name"])[0],"row"=>$row));
    $db=null;
    die();

}

if(isset($_POST["submit"]) && $_POST["submit"] == "submit"){

    $fullname = $_POST["fullname"];
    $phonenumber = $_POST["phonenumber"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $category = $_POST["category"];
    $username = $_POST["username"];
    $password = $_POST["enteredpass"];
    $inputState = $_POST["inputState"];
    $inputDistrict = $_POST["inputDistrict"];


    if($gender == "Male"){
        $profilepic = "avatarmale.jpeg";
    }else if($gender == "Female"){
        $profilepic = "avatarfemale.jpeg";
    }else{
        $profilepic = "man.jpg";
    }


    $timestamp = date("Y-m-d H:i:s");

    $query = "INSERT INTO StudentAndTeacher(`Full_Name`,Email,Phone_Number,`Username`,`Password`,Gender,Category,`State`,`City`,`Profile_Pic`,`Timestamp`)VALUES('$fullname','$email','$phonenumber','$username','$password','$gender','$category','$inputState','$inputDistrict','$profilepic','$timestamp')";

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


    $query1 = "SELECT *, DATE(`Timestamp`) as Joined FROM StudentAndTeacher";

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