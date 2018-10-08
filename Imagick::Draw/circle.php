<?php
    //require_once('vendor/autoload.php');

    //Create a ImagickDraw object to draw into.
    $draw = new \ImagickDraw();

    $strokeColor = new \ImagickPixel('Red');
    $fillColor = new \ImagickPixel('Green');

    $draw->setStrokeOpacity(1);
    $draw->setStrokeColor('Red');
    $draw->setFillColor('Green');

    $draw->setStrokeWidth(7);
    $draw->setFontSize(72);

    $draw->circle(250, 250, 100, 150);

    $imagick = new \Imagick();
    $imagick->newImage(500, 500, 'White');
    $imagick->setImageFormat("png");
    $imagick->drawImage($draw);

    header("Content-Type: image/png");
    echo $imagick->getImageBlob();

?>
