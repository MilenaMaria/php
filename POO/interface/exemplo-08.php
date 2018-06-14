<?php
// interface

interface Veiculo {
  public function acelerar($velocidade);
  public function frenar($velocidade);
  public function trocarMarcha($marcha);
}

class Carro implements Veiculo{
  public function acelerar($velocidade){
    echo "O veiculo acelerou até " . $velocidade . "km/h.<br/>";
  }
  public function frenar($velocidade){
    echo "O veiculo frenou até " . $velocidade . "km/h.<br/>";
  }
  public function trocarMarcha($marcha){
    echo "O veiculo engatou a marcha " . $marcha . "<br/>";
  }
}

$meuCarro = new Carro();
$meuCarro->trocarMarcha(1);
$meuCarro->acelerar(60);
$meuCarro->frenar(20);

?>
