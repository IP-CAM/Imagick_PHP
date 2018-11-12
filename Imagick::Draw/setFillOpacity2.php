<?php
	//require_once('vendor/autoload.php');

    $draw = new \ImagickDraw();

    $strokeColor = new \ImagickPixel('Green');
    $fillColor = new \ImagickPixel('Red');

    $draw->setStrokeColor('Green');
    $draw->setFillColor('Red');
    
    //setFillOpacity() Function
    $draw->setFillOpacity(0.5);

    $draw->setStrokeWidth(2);

    $smoothPointsSet = [
        [
            ['x' => 10.0 * 5, 'y' => 10.0 * 5],
            ['x' => 30.0 * 5, 'y' => 90.0 * 5],
            ['x' => 25.0 * 5, 'y' => 10.0 * 5],
            ['x' => 50.0 * 5, 'y' => 50.0 * 5],
        ]
    ];

    foreach ($smoothPointsSet as $points) {
        $draw->bezier($points);
    }
    //Create an image object which the draw commands can be rendered into
    $imagick = new \Imagick();
    $imagick->newImage(300, 300, 'White');
    $imagick->setImageFormat("png");

    //Render the draw commands in the ImagickDraw object 
    //into the image.
    $imagick->drawImage($draw);

    //Send the image to the browser
    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
?>
