<?php 
require_once('vendor/autoload.php'); 
header('Content-type: image/png');
$image = new Imagick('img/geeksforgeeks.png');
$image->blueShiftImage(0.9);
echo $image;
?>

