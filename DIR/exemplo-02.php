<?php

$images = scandir("images");
$data = array();

// var_dump($images);

foreach ($images as $img) {
  if(!in_array($img, array(".",".."))){
  // retira as informações sobre diretorios
    $filename = "images" . DIRECTORY_SEPARATOR . $img;
    $info = pathinfo($filename);
    // var_dump($info);
    $info["size"] = filesize($filename);
    $info["modified"] = date("d/m/Y", filemtime($filename));
    $info["url"] = "http://localhost/php/DIR/".str_replace("\\","/",$filename);

    array_push($data,$info);
}
}

echo json_encode($data);

?>
