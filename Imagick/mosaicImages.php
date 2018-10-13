<?php 

/*Imagick Object*/

 $imagick = new \Imagick();
    $mosaicWidth = 500;
    $mosaicHeight = 400;
     
    $imagick->newimage($mosaicWidth, $mosaicHeight, 'green');
 
 	/*Image Set*/
 	
    $images = [
        "img/geeksforgeeks.png",
        "img/charcoalImage.png",
        "img/colorMatrix.png",
    ];
 
    $positions = [
        [50, 300],
        [100, 125],
        [25, 50],
    ];
     
    $count = 0;
 
    foreach ($images as $image) {
        $nextImage = new \Imagick(realpath($image));
        $nextImage->resizeimage(300, 300, \Imagick::FILTER_LANCZOS, 1.0, true);
 
        $nextImage->setImagePage(
            $nextImage->getImageWidth(),
            $nextImage->getImageHeight(),
            $positions[$count][0],
            $positions[$count][1]
        );
         
        $imagick->addImage($nextImage);
        $count++;
    }
 
    $result = $imagick->mosaicImages();
    $result->setImageFormat('png');
 
    $result->cropImage(
        $mosaicWidth,
        $mosaicHeight,
        0, 0
    );
 
    header("Content-Type: image/png");
    echo $result->getImageBlob();
?>