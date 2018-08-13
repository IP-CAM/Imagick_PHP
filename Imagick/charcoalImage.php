<?php 
require_once('vendor/autoload.php'); 
header('Content-type: image/png');
$image = new Imagick('img/geeksforgeeks.png');
$image->charcoalImage(0.2,1);
echo $image;
?>

