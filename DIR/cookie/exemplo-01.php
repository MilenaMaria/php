<?php
// cookies muito usado em e commerce
$data = array(
  "empresa"=>"Uma empresa"
);
setcookie("NOME_DO_COOKIE",json_encode($data),time()+3600);

echo "OK";


?>
