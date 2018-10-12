<?php 
/*require_once('vendor/autoload.php');*/ 

/*Imagick Object*/

$image = new \Imagick();

/*Copyright of current Imagick Library*/

$string = $image->getCopyright();

/*String*/

echo $string;
?>
