<?php

$file = fopen("log.txt","w+");
//w =  write
// + = cria
// a+ adiciona conteudo no arquivo

fwrite($file,date("d-m-Y"));
// escreve dentro do arquivo\n
// quebra de linha dentro do documento é
fclose($file);
// fecha o manipulador


echo "Arquivo criado com sucesso!"
?>
