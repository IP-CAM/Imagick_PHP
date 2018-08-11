<?php
require_once('vendor/autoload.php');
header('Content-type: image/png');
$image = new Imagick('img/geeksforgeeks.png');
$image->adaptiveResizeImage(1024,768);
echo $image;
?>

