<?php
    require_once('vendor/autoload.php'); 
    $imagick = new \Imagick(realpath("img/geeksforgeeks.png"));

    //Need to be in a format that supports transparency
    $imagick->setimageformat('png');

    $imagick->transparentPaintImage(
        white, 0.7, 0.1 * \Imagick::getQuantum(), false
    );

    //Not required, but helps tidy up left over pixels
    $imagick->despeckleimage();

    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
?>