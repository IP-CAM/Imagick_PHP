<?php
    $draw = new ImagickDraw();

    $draw->setFillColor('red');
    $draw->setFontSize(40);
    //setFontFamily) Function
    $draw->setFontFamily('Ubuntu-Mono');
    $draw->annotation(30, 170, "GeeksForGeeks");

    $draw->setFillColor('green');
    $draw->setFontSize(30);
    //setFontFamily() Function
    $draw->setFontFamily('Open-Sans-Light-Italic');
    $draw->annotation(30, 250, "Ubuntu-Mono");
    
    $imagick = new Imagick();
    $imagick->newImage(350, 300, 'white');
    $imagick->setImageFormat("png");
    $imagick->drawImage($draw);
 
    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
?>
