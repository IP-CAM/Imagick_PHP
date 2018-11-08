<?php
    require_once('vendor/autoload.php');

    //Create a ImagickDraw object to draw into.
    $draw = new ImagickDraw();

    $draw->setFillColor('blue');
    $points = [['x' => 40 * 5, 'y' => 10 * 5], ['x' => 70 * 5, 'y' => 50 * 5], ['x' => 60 * 5, 'y' => 15 * 5],];
    $draw->polygon($points);


    $draw->setFillColor('red');
    $draw->skewY(-60);
    $points = [['x' => 40 * 5, 'y' => 10 * 5], ['x' => 70 * 5, 'y' => 50 * 5], ['x' => 60 * 5, 'y' => 15 * 5],];
    $draw->polygon($points);

    $draw->setFillColor('green');
    $draw->skewY(30);
    $points = [['x' => 40 * 5, 'y' => 10 * 5], ['x' => 70 * 5, 'y' => 50 * 5], ['x' => 60 * 5, 'y' => 15 * 5],];
    $draw->polygon($points);

 
    $image = new Imagick();
    $image->newImage(500, 500, 'white');
    $image->setImageFormat("png");
 
    $image->drawImage($draw);
 
    header("Content-Type: image/png");
    echo $image->getImageBlob();
?>
