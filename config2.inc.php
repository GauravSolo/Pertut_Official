<?php

date_default_timezone_set('Asia/Kolkata');
session_start();


define('DBNAME','pertuttk_pertut');
define('DBUSER','pertuttk_root');
define('DBPASS','Deletezero@123456789');
define('DBHOST','localhost');
try {
  $db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Your page is connected with database successfully..";
} catch(PDOException $e) {
  echo "Issue -> Connection failed: " . $e->getMessage();
}

?>