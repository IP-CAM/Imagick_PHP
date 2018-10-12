<?php 
	require_once('vendor/autoload.php'); 

	/*Imagick Objects*/
	
	$imagick = new \Imagick('https://cdncontribute.geeksforgeeks.org/wp-content/uploads/geeksforgeeks-19.png');
    
   /*    identifyImage*/ 
   var_dump ($imagick->identifyImage());
    ?>