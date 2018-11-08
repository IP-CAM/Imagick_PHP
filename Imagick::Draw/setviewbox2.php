<?php 
    $draw = new \ImagickDraw();
 
    $draw->setStrokeColor('black');
    $draw->setFillColor('red');
    $points = [['x' => 40 * 5, 'y' => 10 * 5], ['x' => 70 * 5, 'y' => 50 * 5], ['x' => 60 * 5, 'y' => 15 * 5],];
    $draw->polygon($points);

    $draw->setviewbox(0, 0, 200, 200);
    $draw->setFillColor('green');
    $points = [['x' => 40 * 7, 'y' => 10 * 4], ['x' => 70 * 2, 'y' => 50 * 3], ['x' => 60 * 3, 'y' => 15 * 3],];
    $draw->polygon($points);
    $draw->setFillColor('yellow');
    $draw->circle(100, 100, 125, 0);
 
    $imagick = new \Imagick();
    $imagick->newImage(400, 300, 'white');
    $imagick->setImageFormat("png");
 
    $imagick->drawImage($draw);
 
    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
?>
