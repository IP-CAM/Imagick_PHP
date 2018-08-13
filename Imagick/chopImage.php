<?php 
require_once('vendor/autoload.php'); 
header('Content-type: image/png');
$image = new Imagick('img/geeksforgeeks.png');
$image->chopImage(40,35,1,2);
echo $image;
?>

