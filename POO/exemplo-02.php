<?php
// atributos e metodos
class Carro{
  private $modelo;
  private $motor;
  private $ano;

  public function getModelo(){
    return $this->modelo;
  }
  public function setModelo($modelo){
    $this->modelo = $modelo;
  }
  public function getmotor(){
    return $this->motor;
  }
  public function setMotor($motor){
    $this->motor = $motor;
  }
  public function getAno():int{
    // :int é cast de variavel
    return $this->ano;
  }
  public function setAno($ano){
    $this->ano = $ano;
  }
  public function exibe(){
    return array(
      'modelo'=>$this->getModelo(),
      'motor'=>$this->getmotor(),
      'ano'=>$this->getAno()
    );
  }
  // final exibe
}
$dt = new DateTime();
$umCarro = new Carro();
/*$umCarro->modelo = "Um modelo qualquer";
não pode acessar direto por falta de autorização*/
$umCarro->setModelo("Um modelo qualquer");
$umCarro->setMotor("Um motor qualquer");
$umCarro->setAno($dt->format("Y"));

print_r($umCarro->exibe());
echo "<br/>";
var_dump(($umCarro->exibe()));

?>
