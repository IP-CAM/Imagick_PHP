<?php 

/*require_once('vendor/autoload.php'); */

/*Image Header*/

header('Content-type: image/png');

/*Imagick Object */

$image = new Imagick('img/geeksforgeeks.png');

/*gammaimage*/

$image->gammaImage(2.2, Imagick::CHANNEL_DEFAULT);
echo $image;
?>
