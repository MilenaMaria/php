<?php

$file = fopen("teste.txt", "w+");

fclose($file);

unlink("teste.txt");
// remove

echo "Removido com sucesso";


?>
