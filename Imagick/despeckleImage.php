<?php 
/*require_once('vendor/autoload.php');*/ 

/*Imagick Object*/

$image = new \Imagick('img/geeksforgeeks.png');

/*despeckleImage Image*/

$image->despeckleImage();

/*Image Header*/

header("Content-Type: image/jpg");
echo $image;
?>
