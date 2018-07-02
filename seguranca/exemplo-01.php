<?php
// command injection

if($_SERVER["REQUEST_METHOD"]==='POST'){

  $cmd = escapeshellcmd($_POST["cmd"]);
  // fugindo de comando via terminal

  var_dump($cmd);
  echo "<pre>";

  $comando = system($cmd, $retorno);
  $comando = system("dir C:", $retorno);

  echo "</pre>";
}


 ?>
<form  method="post">
  <input type="text" name="cmd" value="">
  <button type="submit" name="button">enviar</button>

</form>
