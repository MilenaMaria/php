<?php

function ola($texto = "mundo",$periodo = "Bom dia"){
  return "olá $texto!<br/>";
}

echo ola("mundo");
echo ola("pessoa","Boa tarde");
echo ola("pessoa2","");

function ola2(){
  $argumentos = func_get_args();
  // retorna todos os argumentos
  return $argumentos;
}

var_dump(ola2("Bom dia"));
?>
