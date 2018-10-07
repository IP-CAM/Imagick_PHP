<?php 
/*require_once('vendor/autoload.php');*/ 

/*Imagick Object*/

$image = new \Imagick('img/geeksforgeeks.png');

/*getImageHeight function*/

$size = $image->getImageHeight();
print_r($size);
?>
