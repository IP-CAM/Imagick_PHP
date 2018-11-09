<?php
    $draw = new ImagickDraw();
 
    $draw->setFillColor('white');
    $draw->setFontSize(20);

    //setTextAlignment() function

    $draw->setTextAlignment(0);
    $draw->annotation(5, 75, "Geeksforgeeks!");
    $draw->setTextAlignment(1);
    $draw->annotation(150, 75, "sarthak_ishu11");
    $imagick = new Imagick();
    $imagick->newImage(300, 160,'green');
    $imagick->setImageFormat("png");
    $imagick->drawImage($draw);
 
    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
?>
