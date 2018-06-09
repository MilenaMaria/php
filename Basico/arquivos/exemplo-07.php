<?php
// include "exemplo-06.php";
// ../ sobe um diretorio
require "exemplo-06.php";
/* include x require
require - obriga que o arquivo exista e que funcione corretamente
gera erro fatal e para a execução do codigo
include tenta funcionar mesmo que o arquivo não exista ou
tenha erro e possui mais recursos.
- include path;
- include dinamico (não recomendado como boa pratica);
- requere_once - só chama a função 1 vez mesmo sendo declarada 2
  evitando erros;
*/
$resultado = somar(10,20);

echo $resultado;
 ?>
