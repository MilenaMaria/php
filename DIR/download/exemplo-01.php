<?php
$link = "https://www.google.com.br/logos/doodles/2018/world-cup-2018-day-11-5692104616443904-5688737870643200-ssw.png";
$content = file_get_contents($link);
// var_dump($content);
$parse = parse_url($link);
$basename = basename($parse["path"]);

$file = fopen($basename, "w+");
// recebe e cria
fwrite($file,$content);
// copia
fclose($file);

?>

<img src="<?=$basename?>">
