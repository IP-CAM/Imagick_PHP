<?php 
require_once('vendor/autoload.php'); 
header('Content-type: image/png');
$image = new Imagick('img/geeksforgeeks.png');
$image->addNoiseImage(3,imagick::CHANNEL_DEFAULT);
echo $image;
?>

