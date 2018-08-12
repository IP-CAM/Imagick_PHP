<?php 
require_once('vendor/autoload.php'); 
header('Content-type: image/png');
$image = new Imagick('img/geeksforgeeks.png');
$draw = new ImagickDraw();
 $angle = 56 ;

    $affineRotate = array(
        "sx" => cos($angle), "sy" => cos($angle), 
        "rx" => sin($angle), "ry" => -sin($angle), 
        "tx" => 30, "ty" => 56
    );

    $draw->affine($affineRotate);

    $image->affineTransformImage($draw);
echo $image;
?>


