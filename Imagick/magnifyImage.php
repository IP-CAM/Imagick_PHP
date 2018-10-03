<?php 
/*require_once('vendor/autoload.php');*/ 

/*Imagick Object*/

$image = new \Imagick('img/geeksforgeeks.png');

/*Magnify Image*/

$image->magnifyImage();

/*Image Header*/

header("Content-Type: image/jpg");
echo $image;
?>