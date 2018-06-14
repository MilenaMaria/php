<?php
// utilizando Classes
$dt = new DateTime();
$periodo = new DateInterval("P15D");

echo "<br/>";
echo $dt->format("d/m/Y H:i:s");
echo "<br/>";
$dt->add($periodo);
// add adiciona uma data

echo $dt->format("d/m/Y H:i:s");

?>
