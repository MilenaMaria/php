<?php
// Funções anonimas

function teste($callback){
  // processo lento
  $callback();

}

teste(function(){
  echo "Terminou";
});


echo "<br/>";
$fn = function($a){
  var_dump($a);
};

$fn("oi");

?>
