<?php 
	/*Imagick Object*/

    $imagick = new \Imagick('https://cdncontribute.geeksforgeeks.org/wp-content/uploads/geeksforgeeks-19.png');

    /*reduceNoiseImage*/

    $imagick->reduceNoiseImage(3);

    /*Image header*/
    
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
    ?>