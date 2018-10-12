<?php 

/*require_once('vendor/autoload.php'); */

/*Image Header*/

header('Content-type: image/png');

/*Imagick Object */

$image = new Imagick('img/geeksforgeeks.png');

/*flattenimages*/

$image->flattenimages();
echo $image;
?>
