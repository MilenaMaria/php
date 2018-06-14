<?php
// aula 50 - classes com autoload

function __autoload($nomeClasse){
  require_once("$nomeClasse.php");
  var_dump($nomeClasse);
}
// require_once("Carro.php");

$carro = new Carro();
$carro->acelerar(80);
?>
