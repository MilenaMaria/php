<?php
  // Escopo de variável
  /*variaveis locais só podem ser visualizadas no arquivo
   em que foram criadas*/

  $nome = "Um nome";

  function teste(){
    // escopo da função
    global $nome;
    echo $nome;
  }
  function teste2(){
      // escopo da função
      $nome = "nome";
      echo "<br/>" . $nome . " teste 2";
    }

  // chamada das funções
  teste();
  teste2();
 ?>
