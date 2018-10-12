<?php 
	require_once('vendor/autoload.php'); 

	/*Imagick Objects*/
	
	$imagick = new \Imagick(realpath('img/geeksforgeeks.png'));
    $imagickPalette = new \Imagick(realpath("img/geeksforgeeks.png"));
    
    /*sepiatoneImage and haldClutImage function*/

    $imagickPalette->sepiatoneImage(50);
    $imagick->haldClutImage($imagickPalette);
    
    /*Image Header*/

    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
    ?>