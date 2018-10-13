<?php 

/*Set of images*/

$images = [
        "img/geeksforgeeks.png",
        "img/charcoalImage.png",
        "img/colorMatrix.png",
        "img/adaptiveThresholdImage.png",
        "img/recolorImage.png",
    ];
 
    $imagick = new \Imagick(realpath($images[count($images) - 1]));
 
    foreach ($images as $image) {
        $nextImage = new \Imagick(realpath($image));
        $imagick->addImage($nextImage);
    }
 
    $imagick->resetIterator();

    /*morphImages*/
    
    $morphed = $imagick->morphImages(5);
    $morphed->setImageTicksPerSecond(10);
 
    header("Content-Type: image/gif");
    $morphed->setImageFormat('gif');
    echo $morphed->getImagesBlob();
?>