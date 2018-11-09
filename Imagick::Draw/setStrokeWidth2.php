<?php

    //Create a ImagickDraw object to draw into.
    $draw = new ImagickDraw();

    $draw->setStrokeColor('black');
    $draw->setFillColor('lightgreen');

    //setStrokeWidth
    $draw->setStrokeWidth(0);
    $draw->rectangle(100,100,300,300);
    $draw->setStrokeWidth(15);
    $draw->rectangle(400,100,600,300);
    $imagick = new \Imagick();
    $imagick->newImage(800, 500, 'White');
    $imagick->setImageFormat("png");
    $imagick->drawImage($draw);

    header("Content-Type: image/png");
    echo $imagick->getImageBlob();

?>
