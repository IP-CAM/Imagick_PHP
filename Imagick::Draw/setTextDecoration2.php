<?php
    $draw = new ImagickDraw();
 
    $draw->setFillColor('yellow');
    $draw->setFontSize(20);

    //setTextDecoration() function

    $draw->setTextDecoration(3);//Text is Upperline
    $draw->annotation(50, 75, "A Computer Science Portal For Geeks!");
 
    $imagick = new Imagick();
    $imagick->newImage(500, 160,'black');
    $imagick->setImageFormat("png");
    $imagick->drawImage($draw);
 
    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
?>
