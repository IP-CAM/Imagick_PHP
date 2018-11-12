<?php
    $draw = new ImagickDraw();
 
    $draw->setFillColor('green');
    $draw->setFontSize(60);

    //setGravity() Function
    $draw->setGravity(2);
    $draw->setTextDecoration(4);//Text is Stroke-through
    $draw->annotation(50, 75, "GeeksForGeeks");
 
    $imagick = new Imagick();
    $imagick->newImage(600, 160,'white');
    $imagick->setImageFormat("png");
    $imagick->drawImage($draw);
 
    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
?>
