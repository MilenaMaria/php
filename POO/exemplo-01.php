<?php
// programação orientada a objeto
// Criação de classe
class Pesssoa{

  public $nome;
  // atributo
  public function falar(){
  // metodo
    return "Meu nome é " . $this->nome;

  }
}

$ana = new Pesssoa();
$ana->nome = "ANA ANA";
echo $ana->falar();
?>
