<?php
    $draw = new \ImagickDraw();

    $draw->setFillColor('red');

    for ($x = 0; $x < 10000; $x++) {
        $draw->point(rand(0, 300), rand(0, 300));
    }

    $imagick = new \Imagick();
    $imagick->newImage(300, 300, 'white');
    $imagick->setImageFormat("png");
    $imagick->drawImage($draw);

    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
?>