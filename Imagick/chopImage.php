<?php 
/*require_once('vendor/autoload.php'); */

/*Set Image Header*/

header('Content-type: image/png');

/*Create Imagick Object*/

$image = new Imagick('img/geeksforgeeks.png');

/*chopImage*/

$image->chopImage(40,35,1,2);
echo $image;
?>

