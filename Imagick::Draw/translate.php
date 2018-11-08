<?php
    require_once('vendor/autoload.php');

    //Create a ImagickDraw object to draw into.
    $draw = new ImagickDraw();

    $draw->setStrokeColor('black');
    $draw->setFillColor('red');
    $draw->circle(250, 250, 100, 150);
 
    $draw->setFillColor('green');
    $draw->translate(90, 30);
    $draw->circle(350, 350, 250, 350);
 
    $image = new Imagick();
    $image->newImage(500, 500, 'white');
    $image->setImageFormat("png");
 
    $image->drawImage($draw);
 
    header("Content-Type: image/png");
    echo $image->getImageBlob();
?>
