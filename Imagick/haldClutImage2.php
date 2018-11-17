<?php 
$string = "Computer Science portal for Geeks!"; 

// creating new image of above String 
// and add color and background 
$im = new Imagick(); 
$draw = new ImagickDraw(); 

// Fill the color in image 
$draw->setFillColor(new ImagickPixel('green')); 

// Set the text font size 
$draw->setFontSize(50); 

$metrix = $im->queryFontMetrics($draw, $string); 
$draw->annotation(0, 40, $string); 
$im->newImage($metrix['textWidth'], $metrix['textHeight'], 
new ImagickPixel('white')); 

// Draw the image		 
$im->drawImage($draw); 

// raiseImage Function
   var_dump ($im->identifyImage());

// Display the output image 
echo $im->getImageBlob(); 
?> 

