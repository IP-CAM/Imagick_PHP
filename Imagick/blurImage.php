<?php 
require_once('vendor/autoload.php'); 
header('Content-type: image/png');
$image = new Imagick('img/geeksforgeeks.png');
$image->blurImage(9,3);
echo $image;
?>
