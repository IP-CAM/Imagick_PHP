<?php 
require_once('vendor/autoload.php'); 

/*Imagick Object*/

$image = new \Imagick('img/geeksforgeeks.png');

/*getImageGamma function*/

$size = $image->getImageLength();
print_r($size);
?>
