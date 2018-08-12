<?php
    require_once('vendor/autoload.php');
    $image = new Imagick(realpath('img/geeksforgeeks.png'));
    $draw = new ImagickDraw();
    $draw->setStrokeColor('blue');
    $draw->setFillColor('white');
    $draw->setStrokeWidth(1);
    $draw->setFontSize(36);
    $text = "GeeksforGeeks \nA Computer Science Portal For Geeks";
    $image->annotateimage($draw, 40, 40, 0, $text);
    header("Content-Type: image/png");
    echo $image;
?>
