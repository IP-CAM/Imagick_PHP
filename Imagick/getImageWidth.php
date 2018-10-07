<?php 
require_once('vendor/autoload.php'); 

/*Imagick Object*/

$image = new \Imagick('https://cdncontribute.geeksforgeeks.org/wp-content/uploads/geeksforgeeks-15.png');

/*getImageHeight function*/

$width = $image->getImageWidth();
print_r($width);
?>