<?php 
$draw = new ImagickDraw();
 
    $draw->setFillColor('white');
    $draw->setFontSize(68);

    //setTextUnderColor() function
    $draw->setTextUnderColor('green');
    $draw->annotation(0, 190, "GeeksForGeeks");
    $draw->setFontSize(40);
    $draw->annotation(120, 290, "@sarthak_ishu11");
    $imagick = new Imagick();
    $imagick->newImage(500, 400, 'lightgreen');
    $imagick->setImageFormat("png");
 
    $imagick->drawImage($draw);
 
    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
?>
