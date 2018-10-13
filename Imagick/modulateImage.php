<?php 
/*require_once('vendor/autoload.php'); */

/*Set header*/

header('Content-type: image/png');

/*Crete Imagick Object*/

$image = new Imagick('img/geeksforgeeks.png');

/*modulateImage function*/

$image->modulateImage(60,100,100);
echo $image;
?>

