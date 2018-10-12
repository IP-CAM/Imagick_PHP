<?php	
	
	/*Imagick Object*/

	$imagick = new \Imagick('https://cdncontribute.geeksforgeeks.org/wp-content/uploads/geeksforgeeks-19.png');
    
    /*resampleImage*/

    $imagick->resampleImage(200, 200, \Imagick::FILTER_LANCZOS, 1);

    /*Image Header*/
    
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
?>