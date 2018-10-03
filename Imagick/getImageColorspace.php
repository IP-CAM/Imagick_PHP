<?php 
require_once('vendor/autoload.php'); 

/*Imagick Object*/

$image = new \Imagick('img/geeksforgeeks.png');

/*getImageColorspace function*/

$size = $image->getImageColorspace();
print_r($size);
?>
