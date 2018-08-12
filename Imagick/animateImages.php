<?php 
require_once('vendor/autoload.php'); 
/*header('Content-type: image/gif');*/
$image = new Imagick('img/geeksforgeeks.png');
$path = "./img";
$files = scandir($path);
for($i=2;$i<6;$i++){
$auxImg = new Imagick();
$gif = new Imagick();
$auxImg->readImage($path."/".$files[$i]);
$image->addImage($auxImg);
}
$p='img/animateImages.gif';
$image->writeImages($p, true);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<img src="<?php echo($p); ?>">
</body>
</html>
