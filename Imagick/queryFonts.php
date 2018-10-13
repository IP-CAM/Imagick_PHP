'<?php $output = '';
$output .= "Fonts that match 'Times*' are:<br>";

/*Imagick Object*/

$fontList = \Imagick::queryFonts("Times*");
 
foreach ($fontList as $fontName) {
    $output .= '<li>' . $fontName . "</li>";
}

/*Output*/

echo $output; 
?>'