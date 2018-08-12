<?php 
require_once('vendor/autoload.php'); 
header('Content-type: image/png');
$image = new Imagick('img/geeksforgeeks.png');
$t = new Imagick('img/adaptiveThresholdImage.png');
$image->addImage($t);
echo $image;
?>

