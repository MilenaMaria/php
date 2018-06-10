<?php
function ola(){
  return "olá Mundo!<br/>";
}

echo ola();
$frase = ola();

echo strlen($frase);

function salario(){
  return 500.00;
}
echo "<br/>";
echo "José recebeu 3 salários:".(salario()*3);
?>
