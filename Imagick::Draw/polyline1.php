<?php  
  
// require_once('path/to/vendor/autoload.php');  
  
header('Content-type: image/png'); 
  
$image = new Gmagick( 'images/arc.png'); 
  
$image->addNoiseImage(5,gmagick::CHANNEL_DEFAULT); 
  
echo $image; 
?> 
