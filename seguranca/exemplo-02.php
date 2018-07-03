<?php
// http://localhost/php/seguranca/exemplo-02.php?id=4 OR 1 = 1 --
// executa todos os dados
$id = (isset($_GET["id"]))?$_GET["id"]:3;
// modo de resolver um sql injection
// mostra uma mensagem quando tenta buscar informaçoes via get
if (!is_numeric($id) || strlen($id) > 5){
  exit("Sem injection!");
}

$conn = mysqli_connect(("localhost","user_do_banco","senha_do_banco","nome_banco");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn,$sql);

while ($resultado = mysqli_fetch_object($exec)){
  echo $resultado->deslogin . "<br>";
}
?>
