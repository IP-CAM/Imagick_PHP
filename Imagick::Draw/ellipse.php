<?php
require_once('vendor/autoload.php');

    //Create ImagickDraw object

    $draw = new \ImagickDraw();
    $draw->setStrokeColor('Green');
    $draw->setFillColor('Red');
    $draw->setStrokeWidth(7);

    $draw->ellipse(150, 150, 60, 50, 0, 190);

    //Create an image object which the draw commands can be rendered into

    $image = new \Imagick();
    $image->newImage(300, 300, 'White');
    $image->setImageFormat("png");

    //Render the draw commands in the ImagickDraw object 
    //into the image.
    
    $image->drawImage($draw);

    //Send the image to the browser
    header("Content-Type: image/png");
    echo $image->getImageBlob();

?>