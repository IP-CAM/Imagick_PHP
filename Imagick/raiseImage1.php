<?php 
 
/*require_once('vendor/autoload.php');*/
    /*Imagick Object*/
 
    $imagick = new Imagick('img/geeksforgeeks.png');
 
    /*raiseImage*/
 
    $imagick->raiseImage(60,40,80,25,35);

    /*Write Image*/
 
    $imagick->writeImage('raiseImage1.png');
    /*Destroy Imagick Variable*/
    $imagick->destroy();
?>

