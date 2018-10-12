<?php 
	/*require_once('vendor/autoload.php');*/ 

	/*Imagick Object*/

	$image = new \Imagick('img/geeksforgeeks.png');

	/*Set Background Color*/

    $image->setImageBackgroundColor('green');

    /*extentImage*/

    $image->extentImage(
        $image->getImageWidth(),
        $image->getImageHeight(),
        -50,
        -50
    );
 	
 	/*Image Header*/

    header("Content-Type: image/jpg");
    echo $image->getImageBlob();
?>