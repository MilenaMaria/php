<?php
// aula 18

$nome = "Nome";
$nome2 = "Teste";

var_dump($nome,$nome2);
echo "ABC $nome <br/>";
// string com texto dinamico
echo 'ABC $nome <br/>';
// interpolação de variaveis

$nomeCompleto = "nome sobrenome";
echo strtoupper($nomeCompleto)."<br/>";
$nomeCompleto = strtolower($nomeCompleto);
echo "$nomeCompleto <br/>";
// Maiusculo na primeira de cada palavra ucwords();
echo ucwords($nomeCompleto) ."<br/>";
// Maiusculo na primeira da palavra ucfirst();
echo ucfirst($nomeCompleto) ."<br/>";

$empresa = "Google";
// Troca algo por outra coisa
$empresa = str_replace("o","0",$empresa);
//(oque_procuro,oque_substituira,nome_variavel)
$empresa = str_replace("e","3",$empresa);
echo $empresa;

$frase = "Uma frase qualquer";
$palavra = "frase";
$q = strpos($frase,$palavra);
// encontra a primeira ocorrencia de uma string
var_dump($q);
$texto = substr($frase,0,$q);
// texto antes da palavra procurada
var_dump($texto);
$texto2 = substr($frase,$q+strlen($palavra),strlen($frase));
echo $texto2;
//

?>
