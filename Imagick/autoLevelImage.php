<?php 
/*require_once('vendor/autoload.php'); */

/* Give image a format*/

header('Content-type: image/png');

/*Create Imagick Object*/

$image = new Imagick('img/geeksforgeeks.png');

/*autoLevelImage*/

$image->autoLevelImage(Imagick::CHANNEL_DEFAULT);
echo $image;
?>




