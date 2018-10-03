<?php 

/*require_once('vendor/autoload.php'); */

header('Content-type: image/png');

// Create a new imagick object 

$image = new Imagick('img/geeksforgeeks.png');

// Function to flip an Image 

$image->flipImage();

//Display the output
echo $image;
?>

