
<?php

	require_once('vendor/autoload.php');
    $imagick = new Imagick('img/geeksforgeeks.png');
    $imagick->spliceImage(10, 10, 20, 15);
    header("Content-Type: image/png");
    echo $imagick;
?>
