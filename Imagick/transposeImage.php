<?php
	require_once('vendor/autoload.php'); 

	/*Imagick object*/

    $image = new Imagick('img/geeksforgeeks.png');

    /*transposeImage*/

    $image->transposeImage();
    header("Content-Type: image/jpg");
    echo $image->getImageBlob();
?>