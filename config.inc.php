<?php

date_default_timezone_set('Asia/Kolkata');
session_start();


define('DBNAME','pertut');
define('DBUSER','root');
define('DBPASS','');
define('DBHOST','localhost');
try {
  $db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Your page is connected with database successfully..";
} catch(PDOException $e) {
  echo "Issue -> Connection failed: " . $e->getMessage();
}

// {"error":0,"query":"UPDATE StudentAndTeacher SET Profile_Pic = 'Gaurav.jpg' WHERE Id = '1'"}
?>
