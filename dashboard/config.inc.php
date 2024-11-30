<?php

date_default_timezone_set('Asia/Kolkata');
session_start();


define('DBNAME',getenv('DBNAME'));
define('DBUSER',getenv('DBUSER'));
define('DBPASS',getenv('DBPASS'));
define('DBHOST',getenv('DBHOST'));
try {
  $db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Issue -> Connection failed: " . $e->getMessage();
}
?>
