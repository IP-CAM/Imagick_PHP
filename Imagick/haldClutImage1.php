<?php 
 
/*require_once('vendor/autoload.php');*/
    /*Imagick Object*/
 
    $imagick = new Imagick('img/geeksforgeeks.png');
    $imagickPalette = new Imagick("img/geeksforgeeks.png");

    /*haldClutImage*/

    $imagickPalette->sepiatoneImage(150);
    $imagick->haldClutImage($imagickPalette);

    /*Write Image*/
 
    $imagick->writeImage('raiseImae1.png');
    /*Destroy Imagick Variable*/
    $imagick->destroy();
?>

