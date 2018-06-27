<?php

$image = imagecreatefromjpeg("certificado.jpg");

$font = array("Bevan"=>__DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR. "Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf",
"Playball"=>__DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf");

$titleColor = imagecolorallocate($image,0,0,0);
$gray = imagecolorallocate($image,100,100,100);

// apos tamanho da fonte tem o angulo
imagettftext($image, 32,0, 320,250,$titleColor, $font["Bevan"],"CERTIFICADO");
imagettftext($image, 32,0, 375,350,$gray, $font["Playball"], "Nome de alguém");
imagestring($image, 5, 440,370,utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");
imagejpeg($image);
// imagejpeg($image,"certificado-".date("Y-m-d").".jpg",10);
imagedestroy($image);
?>
