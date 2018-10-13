<?php 
/*require_once('vendor/autoload.php'); */

/*Set header*/

header('Content-type: image/png');

/*Crete Imagick Object*/

$image = new Imagick('img/geeksforgeeks.png');

/*posterizeImage function*/

$image->posterizeImage(2,'TRUE');
echo $image;
?>

