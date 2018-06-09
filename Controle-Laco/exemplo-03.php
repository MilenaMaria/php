<?php
// aula 22
for($i = 0; $i < 10; $i++){
  echo $i . "<br/>";
}

  echo "<br/>";

// break e continue
for($i = 0; $i < 100; $i+=5){
  if ($i>20 && $i<80) continue;
  if ($i===90) break;
  echo $i . "<br/>";
}

  echo "<br/>";

echo "<select>";
for ($x = date("Y"); $x > date("Y")-100; $x--) {
  echo '<option value="'.$x.'">'.$x.'</option>';
}
echo "</select>";
 ?>
