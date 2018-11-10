<?php
$im = new imagick('sample.pdf[0]');
$im->setImageFormat('jpg');
header('Content-Type: image/jpeg');
echo $im;
?>
