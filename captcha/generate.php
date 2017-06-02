<?php

session_start();

header("Content-type: image/jpeg");

$text = $_SESSION['secure'];

$font_size = 40 ;
$image_width = 140; 
$image_height = 70 ;

$image = imagecreate($image_width, $image_height);

imagecolorallocate($image, 255 , 255, 255);

$font_color = imagecolorallocate($image, 0, 0, 0);

for($x =1 ; $x<=25 ; $x++){

	$x1 = rand(1,100);
	$x2 = rand(1,100);
	$y1 = rand(1,100);
	$y2 = rand(1,100);

	imageline($image, $x1, $y1, $x2, $y2, $font_color);
}

imagettftext($image, $font_size, 0, 15 , 60, $font_color, 'amatic.ttf' , $text);

imagejpeg($image);


?>