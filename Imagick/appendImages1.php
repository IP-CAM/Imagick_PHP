<?php
    require_once('vendor/autoload.php');
    $image = new Imagick();
    $image->newImage(100,50,"blue");
    $image->newImage(100,50,"green");
    $image->newImage(100,50,"red");
    $image->resetIterator();
    $com = $image->appendImages(true);
    $com->setImageFormat("png");
    header("COntent-Type: image/png");
    echo $com;
?>

