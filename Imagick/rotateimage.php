<?php
	/*require_once('vendor/autoload.php'); */

	/*Imagick object*/

    $image = new Imagick('img/geeksforgeeks.png');

    /*rotateImage*/

    $image->rotateimage('green', 25);
    header("Content-Type: image/jpg");
    echo $image->getImageBlob();
?>