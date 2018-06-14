<?php

interface Veiculo {
  public function acelerar($velocidade);
  public function frenar($velocidade);
  public function trocarMarcha($marcha);
}
abstract class Automovel implements Veiculo{
// classe abstrada pode já trazer os metodos prontos
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


?>
