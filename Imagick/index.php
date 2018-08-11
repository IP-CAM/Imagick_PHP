<?php 
require_once('vendor/autoload.php'); 

header('Content-type: image/png');

$image = new Imagick('img/geeksforgeeks.png');

$image->adaptiveBlurImage(12,3,imagick::COLOR_RED);
echo $image;
?>
