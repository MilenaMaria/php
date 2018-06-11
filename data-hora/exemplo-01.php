<?php
// Função date() e time()

echo date("d/m/Y H:i:s", 1528678174 );
echo "<br/>";
echo date("d/m/Y H:i:s" );
echo "<br/>";
echo time();
// timestamp
echo "<br/>";

// $ts = strtotime("2001-09-11");
$ts = strtotime("now");
$ts = strtotime("+1 day");

echo date("l, d/m/Y",$ts);

?>
