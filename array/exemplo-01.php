<?php
$frutas = array("laranja", "abacaxi","melancia");

print_r($frutas);
// imprime array
// 1 dimensão  = vetor

$carros[0][0]="carro1";
$carros[0][1]="carro2";
$carros[0][2]="Carro3";
$carros[0][3]="Carro4";

$carros[1][0]="carroA";
$carros[1][1]="carroB";
$carros[1][2]="CarroC";
$carros[1][3]="CarroD";

echo "<br/>";
echo $carros[0][3];
echo "<br/>";
echo end($carros[1]);
// end final do array

$pessoas = array();
echo "<br/>";
array_push($pessoas,array(
  'nome'=> 'nome1',
  'idade'=> '33'
));

array_push($pessoas,array(
  'nome'=> 'nome2',
  'idade'=> '31'
));
print_r($pessoas);
echo "<br/>";
print_r($pessoas[0]['nome']);
?>
