<?php
// thumbnail
header("Content-type: image/jpeg");

$file = "wallpaper.jpg";
$new_width = 256;
$new_height = 256;

// var_dump(getimagesize($file));
// $data = getimagesize($file);
// $width = $data[0];
// $height = $data[1];
list($old_width,$old_height) = getimagesize($file);

$new_image = imagecreatetruecolor($new_width,$new_height);
$old_image = imagecreatefromjpeg($file);

imagecopyresampled($new_image,$old_image,0,0,0,0, $new_width,$new_height,$old_width,$old_height);
// (image destino,imagem de origem,tamanho,x,y,x_ori,x_ori,largura_new,altura_new,largura_old,altura_old)
imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);
?>
