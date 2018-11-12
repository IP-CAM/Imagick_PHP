<?php 
    $draw = new ImagickDraw();

    $draw->setFillColor('green');
    
    //setFontSize() Function
    $draw->setFontSize(40);
 
    //setFont() Function
    $draw->setFont("./font/IndieFlower.ttf");
    $draw->annotation(50, 50, "GeeksForGeeks");
 
    //setFont() Function
    $draw->setFont("./font/DancingScript-Regular.ttf");
    $draw->annotation(10, 100, "A Computer Science Portal For Geeks!");
 
    //setFont() Function
    $draw->setFont("./font/NanumGothic-Regular.ttf");
    $draw->annotation(50, 150, "@sarthak_ishu11");
 
    $imagick = new Imagick();
    $imagick->newImage(560, 200, 'white');
    $imagick->setImageFormat("png");
    $imagick->drawImage($draw);
 
    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
?>
