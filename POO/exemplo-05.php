<?php
// Encapsulamento

class Pesssoa {
  public $nome = "Um nome";
  protected $idade = 39;
  // só quem pode acessar é a propria classe, sub e classes estendidas
  private $senha = "123456";
  // só quem acessa é a classe

  public function verDados(){
    echo "Nome: ".$this->nome . "<br/>";
    echo "idade: ".$this->idade . "<br/>";
    echo "Senha: ".$this->senha . "<br/>";
  }

}

$objeto = new Pesssoa();

// echo $objeto->nome . "<br/>";
//echo $objeto->idade . "<br/>";
// echo $objeto->senha . "<br/>";

$objeto->verDados();
?>
