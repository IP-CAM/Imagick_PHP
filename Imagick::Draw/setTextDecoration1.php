<?php
    $draw = new ImagickDraw();
 
    $draw->setFillColor('green');
    $draw->setFontSize(60);

    //setTextDecoration() function

    $draw->setTextDecoration(4);//Text is Stroke-through
    $draw->annotation(50, 75, "GeeksForGeeks");
 
    $imagick = new Imagick();
    $imagick->newImage(500, 160,'white');
    $imagick->setImageFormat("png");
    $imagick->drawImage($draw);
 
    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
?>
