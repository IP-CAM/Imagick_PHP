<?php 
/*require_once('vendor/autoload.php');*/ 

/*Imagick Object*/

$image = new \Imagick('img/geeksforgeeks.png');

/*getImageColors function*/

$size = $image->getImageColors();
print_r($size);
?>
