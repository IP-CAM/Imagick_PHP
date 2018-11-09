<?php
    $draw = new ImagickDraw();
 
    $draw->setFillColor('orange');
    $draw->setFontSize(50);

    //setTextAntialias() function

    $draw->setTextAntialias(true);
    $draw->annotation(5, 75, "Gfg!");
    $draw->setTextAntialias(false);
    $draw->annotation(105, 75, "Gfg!");
    $imagick = new Imagick();
    $imagick->newImage(300, 160,'green');
    $imagick->setImageFormat("png");
    $imagick->drawImage($draw);
 
    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
?>
