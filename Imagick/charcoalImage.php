<?php 
/*require_once('vendor/autoload.php'); */

/*Set header*/

header('Content-type: image/png');

/*Crete Imagick Object*/

$image = new Imagick('img/geeksforgeeks.png');

/*Charcoal Image function*/

$image->charcoalImage(0.2,1);
echo $image;
?>

