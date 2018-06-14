<?php

function incluirClasses($nomeClasse){
  if(file_exists($nomeClasse. "php")===true){
    require_once($nomeClasse . ".php");
  }
  // verificar se o arquivo já existe na classe
}

spl_autoload_register("incluirClasses");
// ex 2
spl_autoload_register(function($nomeClasse){
  // verificando em pastas diferentes usando função anonima
  if(file_exists("Abstratas" . DIRECTORY_SEPARATOR .$nomeClasse. ".php")===true){
    // concatenando com a barra de diretorio
    require_once("Abstratas" . DIRECTORY_SEPARATOR .$nomeClasse. ".php");
  }
});

$carro = new Carro();
$carro->acelerar(80);



?>
