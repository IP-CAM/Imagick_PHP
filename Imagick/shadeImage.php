<?php 
/*require_once('vendor/autoload.php'); */

/*Imagick Object*/

$imagick = new \Imagick('img/geeksforgeeks.png');

/*shadeImage Function*/

$imagick->shadeImage(true, 45, 20);

/*Image Header*/

header("Content-Type: image/jpg");
echo $imagick->getImageBlob();
?>