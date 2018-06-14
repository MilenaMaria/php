<?php

spl_autoload_register(function($nameClass){

  var_dump($nameClass);

  $dirClass = "class";
  $filename = $dirClass . DIRECTORY_SEPARATOR. $nameClass .".php";
  // DIRECTORY_SEPARATOR corrigi a barra para o padrão do sistema operacional
  // todo o caminho
  if(file_exists($filename)){
    // verifica se o arquivo existe
    require_once($filename);
  }

});

?>
