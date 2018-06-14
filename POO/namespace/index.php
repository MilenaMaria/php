<?php
// aula 51 - usando namespace
require_once("config.php");
/* cadastro na raiz é generico
cadastro na pasta cliente é o cadastro do cliente
mesmo nome ligados, mas que fazem coisas diferentes

- tudo na raiz é generico
*/
use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Um nome qualquer");
$cad->setSenha("Uma senha qualquer");
$cad->setEmail("Um.email.qualquer@gmail.com");

// echo $cad;
$cad->registrarVenda();
?>
