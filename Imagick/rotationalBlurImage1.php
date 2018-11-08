<?php 
 
/*require_once('vendor/autoload.php');*/
    /*Imagick Object*/
 
    $imagick = new Imagick('img/geeksforgeeks.png');
 
    /*rotationalBlurImage*/
 
    $imagick->rotationalBlurImage(6,4);
 
    /*Write Image*/
 
    $imagick->writeImage('rotationalImage1.png');
    /*Destroy Imagick Variable*/
    $imagick->destroy();
?>
