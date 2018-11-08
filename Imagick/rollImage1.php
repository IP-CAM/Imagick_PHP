<?php 

require_once('vendor/autoload.php');
	/*Imagick Object*/

	$imagick = new Imagick('img/charcoalImage.png');

	/*rollImage*/

    $imagick->rollImage(70,50);

    /*Image Header*/
    
    header("Content-Type: image/jpg");
    $imagick->writeImage('rollimage.jpeg');
    $imagick->destroy();
?>
