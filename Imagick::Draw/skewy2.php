<?php
    require_once('vendor/autoload.php');

    //Create a ImagickDraw object to draw into.
    $draw = new ImagickDraw();

    $draw->setStrokeColor('black');
    $draw->setFillColor('red');
    $draw->circle(250, 250, 100, 150); 

    $draw->setFillColor('green');
    $draw->skewY(-30);
    $draw->circle(250, 250, 100, 150); 

    $draw->setFillColor('yellow');
    $draw->skewY(-60);
    $draw->circle(250, 250, 100, 150); 

    $image = new Imagick();
    $image->newImage(700, 700, 'white');
    $image->setImageFormat("png");
 
    $image->drawImage($draw);
 
    header("Content-Type: image/png");
    echo $image->getImageBlob();
?>
