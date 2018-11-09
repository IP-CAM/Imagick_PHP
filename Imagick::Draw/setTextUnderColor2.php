<?php 
$draw = new ImagickDraw();
 
    $draw->setFillColor('white');
    $draw->setFontSize(68);

    $draw->annotation(0, 90, "GeeksForGeeks");
    //setTextUnderColor() function
    $draw->setTextUnderColor('blue');
    $draw->annotation(0, 190, "GeeksForGeeks");
    $imagick = new Imagick();
    $imagick->newImage(500, 300, 'lightgreen');
    $imagick->setImageFormat("png");
 
    $imagick->drawImage($draw);
 
    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
?>
