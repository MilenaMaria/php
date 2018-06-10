<?php
// parametro por valor x por referencia

$a = 10;

function trocaValor(&$a){
  // & ponteiro, passagem de parametro por referencia
  $a += 50;

  return $a;
}

echo trocaValor($a);
echo "<br/>";
echo $a;


$pessoa = array(
  'nome' =>'seu nome',
  'idade' => 21
);
echo "<br/>";

foreach ($pessoa as &$value) {
  if(gettype($value) === 'integer') $value +=10;
  echo $value.'<br/>';
}

print_r($pessoa);
?>
