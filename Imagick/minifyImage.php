<?php 
/*require_once('vendor/autoload.php');*/ 

/*Imagick Object*/

$image = new \Imagick('img/geeksforgeeks.png');

/*Minify Image*/

$image->minifyImage();

/*Image Header*/

header("Content-Type: image/jpg");
echo $image;
?>
