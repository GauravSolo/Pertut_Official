<?php

date_default_timezone_set('Asia/Kolkata');
session_start();


define('DBNAME','b0przwsvp6iwcuhxgemq');
define('DBUSER','ubosbrgnn4o0wpov');
define('DBPASS','l1feG6PmkXJQjHmIkwKE');
define('DBHOST','b0przwsvp6iwcuhxgemq-mysql.services.clever-cloud.com');
try {
  $db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Issue -> Connection failed: " . $e->getMessage();
}
?>
