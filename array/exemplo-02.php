<?php
// aula 26
// JSON - acrônimo de JavaScript Object Notation

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
// print_r($pessoas);
echo "<br/>";

echo json_encode($pessoas);

$json = '[{"nome":"nome1","idade":"33"},{"nome":"nome2","idade":"31"}]';

$data = json_decode($json,true);
// com true não tranforma em objeto
$data = json_decode($json);
// transforma em objeto
var_dump($data);

?>
