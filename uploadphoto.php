<?php
require_once("vendor/autoload.php");
\Tinify\setKey("6SF306RWrpt54Ld2NC0TXSKrjJqRMQ4X");

if(isset($_FILES)){

$filename = time()."-".$_FILES["file"]["name"];

$error = 0;
$source = \Tinify\fromFile($_FILES["file"]["tmp_name"]);
$source->toFile($filename);

try {
    // Use the Tinify API client.
    $sourceData = file_get_contents($_FILES["file"]["tmp_name"]);
    $resultData = \Tinify\fromBuffer($sourceData)->toBuffer();

$error = 0;
} catch(\Tinify\AccountException $e) {
    //print("The error message is: " . $e->getMessage());
    // Verify your API key and account limit.
    $error = 1;
} catch(\Tinify\ClientException $e) {
     //print("The error message is: " . $e->getMessage());
    // Check your source image and request options.
    $error = 1;
} catch(\Tinify\ServerException $e) {
     //print("The error message is: " . $e->getMessage());
    // Temporary issue with the Tinify API.
    $error = 1;
} catch(\Tinify\ConnectionException $e) {
     //print("The error message is: " . $e->getMessage());
    // A network connection error occurred.
    $error = 1;
} catch(Exception $e) {
     //print("The error message is: " . $e->getMessage());
    // Something else went wrong, unrelated to the Tinify API.
    $error = 1;
}

file_put_contents("userlogo/".$filename,$resultData);
// move_uploaded_file($resultData,"userlogo/".$filename);




echo json_encode(array("error"=>$error, "url"=>$filename));
}

?>