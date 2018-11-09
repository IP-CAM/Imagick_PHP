<?php
    $draw = new ImagickDraw();
 
    $draw->setFillColor('green');
    $draw->setFontSize(50);

    //setTextAntialias() function

    $draw->setTextAntialias(false);
    $draw->annotation(50, 75, "Gfg!");
 
    $imagick = new Imagick();
    $imagick->newImage(500, 160,'black');
    $imagick->setImageFormat("png");
    $imagick->drawImage($draw);
 
    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
?>
