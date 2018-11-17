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
 
$smoothPointsSet = [
        [
            ['x' => 10.0 * 5, 'y' => 10.0 * 5],
            ['x' => 30.0 * 5, 'y' => 90.0 * 5],
            ['x' => 25.0 * 5, 'y' => 10.0 * 5],
            ['x' => 50.0 * 5, 'y' => 50.0 * 5],
        ]
    ];
 
    foreach ($smoothPointsSet as $points) {
        $draw->bezier($points);
    }
 
// Set the stroke color
$draw->setStrokeColor('black');
 
// Set the fill color
$draw->setFillColor('lightgreen');
 
// Set the rotation angle
$draw->rotate(15);
 
    foreach ($smoothPointsSet as $points) {
        $draw->bezier($points);
    }
 
//Create an imagick object
$imagick = new \Imagick();
 
// Set the image dimensions
$imagick->newImage(350, 350, 'White');
 
// Set the image format
$imagick->setImageFormat("png");
 
// Draw the image
$imagick->drawImage($draw);
header("Content-Type: image/png");
 
// Display the image
echo $imagick->getImageBlob();
?>
