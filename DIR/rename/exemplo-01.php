<?php
$dirONE = "folder_01";
$dirTWO = "folder_02";
if(!is_dir($dirONE)) mkdir($dirONE);
if(!is_dir($dirTWO)) mkdir($dirTWO);

$filename = "README.txt";

if(!file_exists($dirONE . DIRECTORY_SEPARATOR .$filename)){
    $file = fopen($dirONE . DIRECTORY_SEPARATOR .$filename,"w+");
    fwrite($file,date("d-m-Y H:i:s"));
    fclose($file);
}

rename(
  $dirONE . DIRECTORY_SEPARATOR .$filename,//origem
  $dirTWO . DIRECTORY_SEPARATOR .$filename);//caminho
// rename tbm renomeia caminho(move)

echo "Arquivo movido com sucesso!";
?>
