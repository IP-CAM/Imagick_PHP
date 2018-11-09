<?php

    //Create a ImagickDraw object to draw into.
    $draw = new \ImagickDraw();

    $draw->setStrokeColor('Red');
    $draw->setFillColor('Green');

    //setStrokeWidth
    $draw->setStrokeWidth(7);

    $draw->circle(250, 250, 100, 150);

    $imagick = new \Imagick();
    $imagick->newImage(500, 500, 'White');
    $imagick->setImageFormat("png");
    $imagick->drawImage($draw);

    header("Content-Type: image/png");
    echo $imagick->getImageBlob();

?>
