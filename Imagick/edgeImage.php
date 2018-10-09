<?php 
//require_once('vendor/autoload.php'); 

header('Content-type: image/png');

$image = new Imagick('img/geeksforgeeks.png');

$image->edgeImage(2);
echo $image;
?>
