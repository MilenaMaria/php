<?php
$conn = new mysqli("localhost","user_do_banco","senha_do_banco","nome_banco");
// verificação de banco

if($conn->connect_error){
  echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES(?,?)");
// preparar comando
$stmt->bind_param("ss",$login, $pass);
// tipo de variavel s = string
$login = "user";
$pass = "12345";

$stmt->execute();

$login = "root";
$pass = "2345";
$stmt->execute();
?>
