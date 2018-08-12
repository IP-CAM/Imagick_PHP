<?php 
	$images = [["img/annotateImage.png",
		    "img/addNoiseImage.png"],
		   ["img/adaptiveThresholdImage.png",
		    "img/adaptiveblur.png"]];
	$canvas = new Imagick();
 
    foreach ($images as $imageRow) {
        $rowImagick = new Imagick();
        $rowImagick->setBackgroundColor('gray');
        foreach ($imageRow as $imagePath) {
            $imagick = new Imagick(realpath($imagePath));
            $imagick->setImageBackgroundColor("gray");
            $imagick->resizeimage(200, 200, \Imagick::FILTER_LANCZOS, 1.0, true);
            $rowImagick->addImage($imagick);
        }
        $rowImagick->resetIterator();
        //Add the images horizontally.
        $combinedRow = $rowImagick->appendImages(false);
        $canvas->addImage($combinedRow);
    }
 
    $canvas->resetIterator();
     
    //Add the images vertically.
    $finalimage = $canvas->appendImages(true);
    $finalimage->setImageFormat('png');
 
    header("Content-Type: image/png");
    echo $finalimage;

?>
