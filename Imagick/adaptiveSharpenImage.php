<?php
header('Content-type: image/png');
$image = new Imagick('img/geeksforgeeks.png');
$image->adaptiveSharpenImage(19,8);
echo $image;
?>


