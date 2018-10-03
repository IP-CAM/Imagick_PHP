<?php
/*require_once('vendor/autoload.php'); */

/*Imagick Object*/

$imagick = new \Imagick('img/geeksforgeeks.png');

/*vignetteImage Function*/

$imagick->vignetteImage(35.6, 11.8, 40, 15);

/*Image Header*/

header("Content-Type: image/jpg");
echo $imagick->getImageBlob();

?>