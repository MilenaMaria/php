<?php
// aula 49 - Polimorfismo
/*Polimorfismo são metodos com mesmo nome
mas que possuem comportamentos diferentes*/

abstract class Animal{
  public function falar(){
    return "som";
  }
  public function mover(){
    return "anda";
  }

}

class Cachorro extends Animal{
  public function falar(){
    // mudança de comportamento
    return "Au! Au!";
  }
}

class Gato extends Animal{
  public function falar(){
    // mudança de comportamento
    return "Nyah!";
  }
}

class Passaro extends Animal{
  public function falar(){
    // mudança de comportamento
    return "Atirei o pau no gato-to-to...";
  }
  public function mover(){
    // parent faz Polimorfismo e concatena com o metodo original
    echo "Voa, pula e " . parent::mover();
  }
}

$lulu = new Cachorro();
echo $lulu->falar()."<br/>";
// exemplo de Polimorfismo
echo $lulu->mover()."<br/>";

echo "------------------------<br/>";

$lucy = new Gato();
echo $lucy->falar()."<br/>";
// exemplo de Polimorfismo
echo $lucy->mover()."<br/>";

echo "------------------------<br/>";

$loro = new Passaro();
echo $loro->falar()."<br/>";
// exemplo de Polimorfismo
echo $loro->mover()."<br/>";
?>
