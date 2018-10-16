<?php 
require_once('vendor/autoload.php'); 

/*Imagick Object*/

$image = new \Imagick('img/geeksforgeeks.png');

/*getImageWidth Image*/

$width = $image->getImageWidth();
print "the image width is " . $width . " pixels";
?>
