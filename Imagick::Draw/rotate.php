<?php
//require_once('vendor/autoload.php');
 
// Create an Imagick Draw object
$draw = new \ImagickDraw();
 
// Set the stroke color
$strokeColor = new \ImagickPixel('Green');
 
// Set the fill color
$fillColor = new \ImagickPixel('Red');
 
// Set the stroke opacity
$draw->setStrokeOpacity(1);
 
// Set the stroke color
$draw->setStrokeColor('Green');
 
// Set the Fill Color
$draw->setFillColor('Red');
 
// Set the stroke width
$draw->setStrokeWidth(2);

// Draw the rectangle
$draw->rectangle(100,200,500,400);
 
// Set the stroke color
$draw->setStrokeColor('black');
 
// Set the fill color
$draw->setFillColor('lightgreen');
 
// Set the rotation
$draw->rotate(10);
 
// Draw the rectangle
$draw->rectangle(100,200,500,400);
 
//Create an imagick object
$imagick = new \Imagick();
 
// Set the image dimensions
$imagick->newImage(600, 500, 'White');
 
// Set the image format
$imagick->setImageFormat("png");
 
// Draw the image
$imagick->drawImage($draw);
header("Content-Type: image/png");
 
// Display the image
echo $imagick->getImageBlob();
?>
