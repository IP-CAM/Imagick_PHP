<?php 
 
/*require_once('vendor/autoload.php');*/
    /*Imagick Object*/
 
    $imagick = new Imagick('img/geeksforgeeks.png');
 
    /*radialBlurImage*/
 
    $imagick->radialBlurImage(6,10);

    /*Write Image*/
 
    $imagick->writeImage('radialBlurImage1.png');
    /*Destroy Imagick Variable*/
    $imagick->destroy();
?>

