<?php
 //aula - 15
// Variáveis pré-definidas

// variavel global
// get vem pela url
// apos o ?
// localhost ou http...../exempor.php?a=2&b=3
$nome = (int)$_GET["a"];
// cast
// var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];
// captura Informações do ambiente como ip
$ip = $_SERVER["SCRIPT_NAME"];
// caminho... log de acesso
echo $ip;

  ?>
