<?php 
	/*Imagick Object*/

	$imagick = new \Imagick('https://cdncontribute.geeksforgeeks.org/wp-content/uploads/geeksforgeeks-19.png');

	/*rotationalBlurImage*/

    $imagick->rotationalBlurImage(1);
    $imagick->rotationalBlurImage(7);
    $imagick->rotationalBlurImage(3);

    /*Image Header*/
    
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();

?>