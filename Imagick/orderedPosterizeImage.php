<?php 
/*require_once('vendor/autoload.php'); */

$imagick = new \Imagick('img/geeksforgeeks.png');

/*orderedPosterizeImage*/

    $imagick->orderedPosterizeImage('o4x4');
    $imagick->setImageFormat('png');
     
    header("Content-Type: image/png");
    echo $imagick->getImageBlob();
?>

