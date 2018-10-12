<?php
//require_once('vendor/autoload.php');

/*Imagick Object*/
$image = new Imagick('img/geeksforgeeks.png');
$Matrix = [-1, -1, -1, -1, 8, -1, -1, -1, -1,];
$image->setImageBias($bias * \Imagick::getQuantum());

/*convolveImage*/

$image->convolveImage($Matrix);

/*Image Header*/

header('Content-type: image/png');
echo $image;
?>
