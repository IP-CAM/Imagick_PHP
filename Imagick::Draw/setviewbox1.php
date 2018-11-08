<?php 
    $draw = new \ImagickDraw();
 
    $draw->setStrokeColor('black');
    $draw->setFillColor('yellow');
    $draw->setStrokeWidth(2);
    $draw->setFontSize(72);
 
 
    $draw->rectangle(150, 450, 450, 300);
    $draw->setviewbox(0, 0, 200, 200);
    $draw->setFillColor('green');
    $draw->rectangle(150, 450, 250, 300);
    $draw->setFillColor('red');
    $draw->circle(100, 100, 125, 0);
 
    $imagick = new \Imagick();
    $imagick->newImage(500, 500, 'white');
    $imagick->setImageFormat("png");
 
    $imagick->drawImage($draw);
 
    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
?>
