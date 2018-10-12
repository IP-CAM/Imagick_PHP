<?php 
/*Imagick Object*/

$imagick = new \Imagick('img/geeksforgeeks.png');

$points = array(
    0, 0,
    55, 25,
    100, 0,
    100, 50
);
 
$imagick->setimagebackgroundcolor("lightgreen");
$imagick->setImageVirtualPixelMethod(\Imagick::VIRTUALPIXELMETHOD_BACKGROUND);

/* distortImage */

$imagick->distortImage(\Imagick::DISTORTION_AFFINE, $points, true);

/*Image Header*/

header("Content-Type: image/jpeg");
echo $imagick;
?>