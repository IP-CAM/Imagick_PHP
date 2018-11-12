<?php
require_once('vendor/autoload.php');

    //Create ImagickDraw object

    $draw = new \ImagickDraw();
    $draw->setStrokeColor('Green');

    //setFillColor() Function
    $draw->setFillColor('Red');

    //setFillOpacity() Function 
    $draw->setFillOpacity(0.2);

    $draw->setStrokeWidth(7);

    $draw->rectangle(40, 30, 200, 260);

    //setFillColor() Function
    $draw->setFillColor('Red');
    $draw->rectangle(260, 30, 400, 260);

    //Create an image object which the draw commands can be rendered into

    $image = new \Imagick();
    $image->newImage(500, 300, 'white');
    $image->setImageFormat("png");

    //Render the draw commands in the ImagickDraw object 
    //into the image.
    
    $image->drawImage($draw);

    //Send the image to the browser
    header("Content-Type: image/png");
    echo $image->getImageBlob();

?>
