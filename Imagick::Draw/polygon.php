<?php
    
    require_once('vendor/autoload.php');

    $draw = new \ImagickDraw();

    $draw->setStrokeOpacity(1);
    $draw->setStrokeColor('Black');

    //setStrokeOpacity() Function
    $draw->setStrokeOpacity(0.8);
    $draw->setStrokeWidth(10);

    //setStrokeLineJoin() Function
    $draw->setStrokeLineJoin(Imagick::LINEJOIN_ROUND);

    //setFillColor() Function
    $draw->setFillColor('lightgreen');
    
    //setStrokeMiterLimit() Function
    $draw->setStrokeMiterLimit(40 * 12);
    $points = [
        ['x' => 50 * 6, 'y' => 10 * 5],
        ['x' => 20 * 7, 'y' => 30 * 5], 
        ['x' => 60 * 8, 'y' => 50 * 5], 
        ['x' => 70 * 3, 'y' => 15 * 5],
    ];

    $draw->polygon($points);

    $image = new \Imagick();
    $image->newImage(500, 300, 'white');
    $image->setImageFormat("png");
    $image->drawImage($draw);

    header("Content-Type: image/png");
    echo $image->getImageBlob();

?>
