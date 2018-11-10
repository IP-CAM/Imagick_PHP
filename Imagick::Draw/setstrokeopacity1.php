<?php
require_once('vendor/autoload.php');

    //Create ImagickDraw object

    $draw = new \ImagickDraw();
    $draw->setStrokeColor('Green');
    $draw->setFillColor('Red');

    //setStrokeOpacity() function
    $draw->setStrokeOpacity(0.5);

    $draw->setStrokeWidth(9);
    $draw->rectangle(40, 30, 200, 260);

    //Create an image object which the draw commands can be rendered into

    $image = new \Imagick();
    $image->newImage(240, 300, 'White');
    $image->setImageFormat("png");

    //Render the draw commands in the ImagickDraw object 
    //into the image.
    
    $image->drawImage($draw);

    //Send the image to the browser
    header("Content-Type: image/png");
    echo $image->getImageBlob();

?>
