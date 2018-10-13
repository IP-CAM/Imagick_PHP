<?php 
/*require_once('vendor/autoload.php'); */

/*Set header*/

header('Content-type: image/png');

/*Crete Imagick Object*/

$image = new Imagick('img/geeksforgeeks.png');

/*Random Threshold Image function*/

$image->randomThresholdImage(0.3,0.9,'ALL');
echo $image;
?>

