<?php

$name = "images";

if(!is_dir($name)){
  mkdir($name);
  // make a directory
  echo "Diretorio $name criado com sucesso!";
} else{
  // rmdir($name);
  // remove
  echo "Já existe o diretório: $name foi removido";
}



?>
