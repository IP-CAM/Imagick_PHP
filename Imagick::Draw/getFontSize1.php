<?php
    $draw = new ImagickDraw();
 
    $draw->setFillColor('green');
    $draw->setFontSize(60);

    //setGravity() Function
    $draw->setGravity(2);
    $draw->setTextDecoration(4);//Text is Stroke-through
    $draw->annotation(50, 75, "GeeksForGeeks");

    echo ($draw->getFontSize());
?>
