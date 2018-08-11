<?php 
require_once('vendor/autoload.php'); 

header('Content-type: image/png');

$image = new Imagick('img/geeksforgeeks.png');

$image->adaptiveThresholdImage(1024,73,0.625);
echo $image;
?>
