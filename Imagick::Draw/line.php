<?php
    $draw = new \ImagickDraw();

    $draw->setFillColor('red');


        $draw->line(10,30,180,200);

    $imagick = new \Imagick();
    $imagick->newImage(300, 300, 'white');
    $imagick->setImageFormat("png");
    $imagick->drawImage($draw);

    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
?>