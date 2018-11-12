<?php
    $draw = new ImagickDraw();

    $draw->setFillColor('red');
    $draw->setFontSize(40);
    //setFontStyle() Function
    $draw->setFontStyle(\Imagick::STYLE_OBLIQUE);
    $draw->annotation(30, 170, "GeeksForGeeks");

    $draw->setFillColor('green');
    $draw->setFontSize(30);
    $draw->annotation(30, 250, "Oblique Style");
    
    $imagick = new Imagick();
    $imagick->newImage(350, 300, 'white');
    $imagick->setImageFormat("png");
    $imagick->drawImage($draw);
 
    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
?>
