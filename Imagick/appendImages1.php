<?php
    /*require_once('vendor/autoload.php');*/

    /* Create new imagick object */
    
    $image = new Imagick();
    
    /* create blue, green and red images */

    $image->newImage(100,50,"blue");
    $image->newImage(100,50,"green");
    $image->newImage(100,50,"red");

    /* Append the images into one */

    $image->resetIterator();
    $com = $image->appendImages(true);
    
    /* Output the image */

    $com->setImageFormat("png");
    header("COntent-Type: image/png");
    echo $com;
?>

