<?php

header("Content-Type: image/png");

$image = imagecreate(256,256);

$black = imagecolorallocate($image,0,0,0);
// image,red,green, blue
$red = imagecolorallocate($image,255,0,0);

imagestring($image,5,60,120,"Header - PHP 7",$red);
// (image,font,x,y,string,color)

imagepng($image);
imagedestroy($image);
?>
