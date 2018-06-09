<?php
  $nome = "Meu nome";
  $sobrenome = "outro nome";
  echo $nome ." ". $sobrenome;
  // exit;
  // para a execução do cod

  var_dump($nome);
  // Informações da variavel
  $anoNasc = 1900;
  // Padrão camelcase
  // unico caracterer especial permitidos para nomes é o _

  echo "$nome <br/>" ;
  unset($nome);
  // seta a variavel

  // validação do valor setado
  // só aparece se for declarada
  if(isset($nome)){
    echo $nome;
  }

  /* tipos de dados primitivos
   tipos basicos:
   -inteiro
   -String
   -ponto flutuante
   -boleano
   tipos compostos:
   -array
   -objetos
   tipos especiais:
   -resource
   -null
  */

  // tipos basicos
  $nomeAluno = "nome";
  $nomeAlunoNovo = 'nome do outro';
  $anoNascimento = 1900;
  $salario = 500.99;
  $bloqueado = false;
///////////////////////////////////////////////////
  // tipos compostos
  $frutas = array("abacaxi","laranja","mamão");
  echo $frutas[2] ."<br/>";

  $nascimento = new DateTime();
  var_dump($nascimento);
  // ///////////////////////////////////////////////
  // tipos especiais
  $arquivo = fopen("exemplo-01.php","r");
  var_dump($arquivo);

  $nulo = NULL;
// null != vazio ou ""
// null é a ausencia de valor
// "" variavel iniciada que ocupa valor na memoria 


?>
