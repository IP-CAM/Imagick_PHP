<?php 
require_once('vendor/autoload.php'); 

header('Content-type: image/png');

$image = new Imagick('img/geeksforgeeks.png');

$image->embossImage(7,3);
echo $image;
?>
