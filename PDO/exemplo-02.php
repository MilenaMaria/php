<?php
// conexão com pdo

$conn = new PDO("mysql:dbname=nome_do_banco;host=localhost","user","senha");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN,:PASSWORD)");
$login = "jose";
$password = "asdfasdfa";

$stmt->bindParam(":LOGIN",$login);
// ligamento de parametros
$stmt->bindParam(":PASSWORD",$password);

$stmt->execute();

echo "Insert pronto!";
// $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
// ASSOC tira indice


// var_dump($results);
?>
