<?php

function compress_image($source_url, $destination_url, $quality) {
    
    $info = getimagesize($source_url);

    if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url);
    elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url);
    elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url);
    elseif ($info['mime'] == 'image/jpg') $image = imagecreatefromjpeg($source_url);
     

    $exif = exif_read_data($_FILES["file"]["tmp_name"]);

    if (!empty($exif['Orientation'])) {
        // provided that the source_url is jpeg. Use relevant function otherwise
        switch ($exif['Orientation']) {
            case 3:
            $image = imagerotate($image, 180, 0);
            break;
            case 6:
            $image = imagerotate($image, -90, 0);
            break;
            case 8:
            $image = imagerotate($image, 90, 0);
            break;
            default:
            $image = $image;
        } 
    }


   

    //save it
    imagejpeg($image,  'userlogo/'.$destination_url, $quality);
    
    return $destination_url;    
}




if(isset($_FILES)){


// echo "<pre>";
// print_r($_FILES['file']);

$filename = time()."-".$_FILES["file"]["name"];
// $tempname = $_FILES["file"]["tmp_name"];

$source_url = $_FILES["file"]["tmp_name"];  

$source_size = filesize($source_url)/1000;  

$finalname=  time().pathinfo($filename)["filename"].".jpeg";

$filename = compress_image($source_url, $finalname, 5);
$final_size = filesize("userlogo/".$filename)/1000;  







$error = 0;

// echo "file ut content-- ".file_put_contents("userlogo/".$filename,$tempname);
// move_uploaded_file($resultData,"userlogo/".$filename);



echo json_encode(array("error"=>$error, "url"=>$filename,"size"=>number_format($source_size,2).' -> '.number_format($final_size,2)));
}

?>