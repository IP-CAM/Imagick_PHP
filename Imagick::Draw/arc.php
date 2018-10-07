<?php
require_once('vendor/autoload.php');

    //Create ImagickDraw object

    $draw = new \ImagickDraw();
    $draw->setStrokeColor('Green');
    $draw->setFillColor('Red');
    $draw->setStrokeWidth(7);

    $draw->arc(120, 30, 250, 180, 50, 190);

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