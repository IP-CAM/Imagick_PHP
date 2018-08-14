<?php
    $imagick = new Imagick(realpath("img/geeksforgeeks.png"));
    $imagick->setImageOpacity(1);
        $colorMatrix = [
            4, 0.0, 0.0, 0.0, 0.0, -0.157,
            4, 1.0, 0.5, 0.0, 0.0, -0.157,
            4, 0.0, 1.5, 0.0, 0.0, -0.157,
            5, 0.0, 0.0, 1.0, 0.0,  0.0,
            8, 0.0, 0.0, 0.0, 1.0,  0.0,
            0.0, 0.0, 0.0, 0.0, 0.0,  1.0
        ];
 
    $background = new Imagick();
    $background->newPseudoImage(
        $imagick->getImageWidth(),
        $imagick->getImageHeight(),
        "pattern:checkerboard"
    );
 
    $background->setImageFormat('png');
 
    $imagick->setImageFormat('png');
    $imagick->colorMatrixImage($colorMatrix);
     
    $background->compositeImage($imagick, \Imagick::COMPOSITE_ATOP, 0, 0);
 
    header("Content-Type: image/png");
    echo $background;
?>
