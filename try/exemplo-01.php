<?php

try {
  // tenta executar
  throw new Exception("Houve um erro", 400);
  // throw é uma excessão

} catch (Exception $e) {
  //caso de erro catch executa
  echo json_encode(array(
    "message"=>$e->getMessage(),
    "line"=>$e->getLine(),
    "file"=>$e->getFile(),
    "code"=>$e->getCode()
  ));
}

?>
