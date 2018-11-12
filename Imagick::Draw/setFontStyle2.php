<?php
    $draw = new ImagickDraw();

    $draw->setFillColor('black');
    $draw->setFontSize(30);
    //setFontStyle() Function
    $draw->setFontStyle(\Imagick::STYLE_ITALIC);
    $draw->annotation(30, 170, "GeeksForGeeks");

    $draw->setFillColor('blue');
    $draw->setFontSize(25);
    $draw->annotation(30, 250, "Italic Style");
    
    $imagick = new Imagick();
    $imagick->newImage(350, 300, 'white');
    $imagick->setImageFormat("png");
    $imagick->drawImage($draw);
 
    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
?>
