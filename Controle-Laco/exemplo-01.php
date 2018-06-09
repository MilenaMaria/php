<?php
  // aula 20

  $idade = 125;
  $idadeCrianca =  12;
  $idadeMaior = 18;
  $idadeMelhor = 65;

  if ($idade < $idadeCrianca){
    echo "Criança";
  }elseif ($idade < $idadeMaior){
    echo "Adolecente";
  }elseif($idade < $idadeMelhor){
    echo "Adulto";
  }else{
    echo "Idoso";
  }

  // operador ternario

  echo "<br/>";
  echo ($idade<$idadeMaior)?"Menor de Idade" : "Maior de idade";
 ?>
