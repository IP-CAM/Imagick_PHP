<?php 
 
/*require_once('vendor/autoload.php');*/
    /*Imagick Object*/
 
    $imagick = new Imagick('img/geeksforgeeks.png');

    /*recolorImage*/
    $remapColor = [ 1, 3, 0,
        0, 0, 4,
        1, 1, 0,];

    $imagick->recolorImage($remapColor);

    /*Write Image*/
 
    $imagick->writeImage('recolorImage1.png');
    /*Destroy Imagick Variable*/
    $imagick->destroy();
?>

