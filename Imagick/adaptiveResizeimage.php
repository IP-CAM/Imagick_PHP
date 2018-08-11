<?php
header('Content-type: image/png');
$image = new Imagick('img/geeksforgeeks.png');
$image->adaptiveResizeImage(2048,1536);
echo $image;
?>

