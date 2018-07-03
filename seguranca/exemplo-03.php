<?php
// permissões de pasta

$pasta = "arquivos";
$permissao = "0755";

if(!is_dir($pasta)) mkdir ($pasta,$permissao);
/* segundo argumento do diretorio é opcional
permissoes vão de 0 a 7
0 = sem permissão
1 = permissão de exec
2 = pode gravar
3 = 1 e 2
4 = leitura
5 = leitura e execuçao
6 = leitura e gravação
7 = todas as permissoes
*/
echo "Diretorio criado";

?>
