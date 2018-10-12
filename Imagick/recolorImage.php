<?php 
$imagick = new \Imagick('https://cdncontribute.geeksforgeeks.org/wp-content/uploads/geeksforgeeks-19.png');

/*Color Matrix*/

$remapColor = [ 1, 0, 0,
        0, 0, 1,
        0, 1, 0,];
 
 /*recolorImage*/

$imagick->recolorImage($remapColor);
 
/*Image Header*/

header("Content-Type: image/jpg");
echo $imagick->getImageBlob();
?>