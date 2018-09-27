<?php
    require_once('vendor/autoload.php');
    /*Create some objects of Imagickand ImagickDraw Class*/
    $image = new Imagick(realpath('img/geeksforgeeks.png'));
    $draw = new ImagickDraw();
    /*Set Text Properties like Color, Font-Size*/
    $draw->setStrokeColor('blue');
    $draw->setFillColor('white');
    $draw->setStrokeWidth(1);
    $draw->setFontSize(36);
    /*Set the string:text */
    $text = "GeeksforGeeks \nA Computer Science Portal For Geeks";
    /*annotateimage*/
    $image->annotateimage($draw, 40, 40, 0, $text);
   /* Give image a format*/
    header("Content-Type: image/png");
    echo $image;
?>
