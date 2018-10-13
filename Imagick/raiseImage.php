<?php 
/*require_once('vendor/autoload.php'); */

/*Set header*/

header('Content-type: image/png');

/*Crete Imagick Object*/

$image = new Imagick('img/geeksforgeeks.png');

/*Raise Image Image function*/

$image->raiseImage(20,30,10,15,25);
echo $image;
?>

