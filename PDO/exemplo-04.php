<?php
// conexão com pdo
// drop exclui estruturas
$conn = new PDO("mysql:dbname=nome_do_banco;host=localhost","user","senha");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");
$id = "1";

$stmt->bindParam(":ID",$id);
$stmt->execute();

echo "Delete pronto!";
// $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
// ASSOC tira indice

// var_dump($results);
?>
