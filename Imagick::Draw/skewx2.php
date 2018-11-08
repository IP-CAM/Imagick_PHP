<?php
    require_once('vendor/autoload.php');

    //Create a ImagickDraw object to draw into.
    $draw = new ImagickDraw();

    $draw->setStrokeColor('black');
    $draw->setFillColor('red');
    $draw->circle(250, 250, 100, 150); 

    $draw->setFillColor('green');
    $draw->skewX(30);
    $draw->circle(250, 250, 100, 150); 

    $draw->setFillColor('yellow');
    $draw->skewX(30);
    $draw->circle(250, 250, 100, 150); 

    $image = new Imagick();
    $image->newImage(900, 600, 'white');
    $image->setImageFormat("png");
 
    $image->drawImage($draw);
 
    header("Content-Type: image/png");
    echo $image->getImageBlob();
?>
