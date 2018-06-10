<?php
// aula 17 Conhecendo os operadores do php

// operadores de atribuição
$nome = "nome";

echo $nome . " mais algo <br/>";
$nome .=  " Treinamento \o/ <br/>";
echo $nome;

$valorTotal = 0;
$valorTotal += 100;
$valorTotal += 25;
$valorTotal -=10;

echo $valorTotal;
echo "<br/>";

// operadores aritimeticos
$a = 10;
$b = 2;

echo $a + $b;
echo "<br/>";
echo $a - $b;
echo "<br/>";
echo $a * $b;
echo "<br/>";
echo $a / $b;
echo "<br/>";
echo $a % $b;
echo "<br/>";
echo $a ** $b;
echo "<br/>";

// operadores de comparação
$c = 30;
$d = 55;

var_dump($c > $d);
var_dump($c < $d);
var_dump($c >= $d);
var_dump($c <= $d);
var_dump($c == $d);
var_dump($c === $d);
// === compara valor e tipo
var_dump($c != $d);
var_dump($c !== $d);

// spaceship
// para comparações de menor e igual
$valorA = 50;
$valorB = 35;
$valorC = NULL;

echo "<br/>";
var_dump($valorA <=> $valorB);

// null coalesce
echo "<br/>";
 echo $a ?? $b ?? $c;


// operadore incrementais

$incre = 10;
echo "<br/>";
echo $incre++;
echo $incre;

// var++
// ++var

/* operadores logicos
-&& (e)
-|| (ou)
*/

 ?>
