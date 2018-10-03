<?php 
/*require_once('vendor/autoload.php'); */

/*Imagick Object*/

$image = new \Imagick('img/geeksforgeeks.png');

/*getImageGamma function*/

$size = $image->getImageGamma();
print_r($size);
?>
