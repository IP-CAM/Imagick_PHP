<?php
//require_once('vendor/autoload.php');

// Create an ImagickDraw object

$draw = new \ImagickDraw();

// Set the Stroke Color 
$draw->setStrokeColor('Green');

// Set the Fill Color
$draw->setFillColor('Red');

// Set teh stroke width
$draw->setStrokeWidth(7);

// Draw the rectangle
$draw->rectangle(40, 30, 200, 260);

// Set the scale
$draw->scale(1.4, 1.4);

// Set the fill color
$draw->setFillColor('lightgreen');

// Draw the rectangle
$draw->rectangle(40, 30, 200, 260);

// Create an Imagick object 
$image = new \Imagick();

// Set the image dimensions
$image->newImage(500, 400, 'White');

// Set the image format
$image->setImageFormat("png");

// Draw the image
$image->drawImage($draw);
header("Content-Type: image/png");

// Display teh iamge 
echo $image->getImageBlob();
?>
