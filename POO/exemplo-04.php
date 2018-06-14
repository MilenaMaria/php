<?php
// metodos magicos

class Endereco{

  private $logadouro;
  private $numero;
  private $cidade;

  public function __construct($a, $b, $c){
    $this->logadouro = $a;
    $this->numero = $b;
    $this->cidade = $c;
  }

  public function __destruct(){
    // descontrução
    var_dump("Destroi");
    }

    public function __toString(){
      return $this->logadouro.", ". $this->numero .", ".$this->cidade.".";
    }
}

$meuEndereco = new Endereco("Rua das perolas","123","Uma cidade inventada");
var_dump($meuEndereco);
echo "<br/>";
print_r($meuEndereco);
echo "<br/>";
echo $meuEndereco;
echo "<br/>";
unset($meuEndereco)
?>
