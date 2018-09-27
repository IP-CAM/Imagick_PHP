<?php
	/*require_once('vendor/autoload.php'); */
    $image = new Imagick('img/geeksforgeeks.png');
    $image->rotateimage('green', 25);
    header("Content-Type: image/jpg");
    echo $image->getImageBlob();

?>