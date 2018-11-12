<?php
    $draw = new ImagickDraw();

    $draw->setFillColor('red');
    //setFontStretch() Function
    $draw->setFontWeight(200);
    $draw->setFontSize(40);
    $draw->setFontFamily('Ubuntu-Mono');
    $draw->annotation(30, 170, "GeeksForGeeks");

    $draw->setFillColor('green');
    //setFontStretch() Function
    $draw->setFontStretch(3);
    $draw->setFontSize(30);
    $draw->setFontFamily('Open-Sans-Light-Italic');
    $draw->annotation(30, 250, "Font-Weight : 200");
    
    $imagick = new Imagick();
    $imagick->newImage(350, 300, 'white');
    $imagick->setImageFormat("png");
    $imagick->drawImage($draw);
 
    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
?>
