<?php
    $draw = new ImagickDraw();

    $draw->setFillColor('Green');
    $draw->setFontSize(30);
    //setGravity() Function
    $draw->setGravity(1);
    $draw->setFontWeight(400);
    $draw->setFontFamily('Ani');
    $draw->annotation(30, 40, "GeeksForGeeks");
    
    $imagick = new Imagick();
    $imagick->newImage(250, 70, 'white');
    $imagick->setImageFormat("png");
    $imagick->drawImage($draw);
 
    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
?>
