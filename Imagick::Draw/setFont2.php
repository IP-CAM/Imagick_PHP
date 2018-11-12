<?php 
    $draw = new ImagickDraw();
    
    //setFontSize() Function
    $draw->setFontSize(40);

    $draw->setFillColor('green');
    $draw->rectangle(30,100,300,300);

    //setFont() Function
    $draw->setFillColor('black');
    $draw->setFont("./font/IndieFlower.ttf");
    $draw->annotation(35, 280, "GeeksForGeeks");
 
    $imagick = new Imagick();
    $imagick->newImage(330, 330, 'white');
    $imagick->setImageFormat("png");
    $imagick->drawImage($draw);
 
    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
?>
