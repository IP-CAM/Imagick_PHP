<?php
    require_once('vendor/autoload.php');

    //Create a ImagickDraw object to draw into.
    $draw = new ImagickDraw();

    //setStrokeMiterLimit() Function
    $draw->setStrokeWidth(5);
    $draw->setStrokeMiterLimit(50 * 15);

    $draw->setStrokeColor('black');
    $draw->setFillColor('red');
    $points = [['x' => 40 * 5, 'y' => 10 * 5], ['x' => 70 * 5, 'y' => 50 * 5], ['x' => 60 * 5, 'y' => 15 * 5],];
    $draw->polygon($points);

    $draw->setFillColor('green');
    $draw->translate(10, 30);
$points = [['x' => 40 * 5, 'y' => 10 * 5], ['x' => 70 * 5, 'y' => 50 * 5], ['x' => 60 * 5, 'y' => 15 * 5],];
    $draw->polygon($points);
 
    $draw->setFillColor('blue');
    $draw->translate(10, 30);
$points = [['x' => 40 * 5, 'y' => 10 * 5], ['x' => 70 * 5, 'y' => 50 * 5], ['x' => 60 * 5, 'y' => 15 * 5],];
    $draw->polygon($points);

    $draw->setFillColor('yellow');
    $draw->translate(10, 30);
$points = [['x' => 40 * 5, 'y' => 10 * 5], ['x' => 70 * 5, 'y' => 50 * 5], ['x' => 60 * 5, 'y' => 15 * 5],];
    $draw->polygon($points);

    $image = new Imagick();
    $image->newImage(400, 400, 'white');
    $image->setImageFormat("png");
 
    $image->drawImage($draw);
 
    header("Content-Type: image/png");
    echo $image->getImageBlob();
?>
