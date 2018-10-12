<?php 
	/*Imagick Object*/

	$imagick = new \Imagick('https://cdncontribute.geeksforgeeks.org/wp-content/uploads/geeksforgeeks-19.png');

	/*rollImage*/

    $imagick->rollImage(60,50);

    /*Image Header*/
    
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();

?>