<?php
// conecção com pdo
// drop exclui estruturas
$conn = new PDO("mysql:dbname=nome_do_banco;host=localhost","user","senha");

$conn->beginTransaction();
// inicia transação
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");
$id = "2";

$stmt->bindParam(":ID",$id);
$stmt->execute(array($id));

// $conn->rollback();
// rollback volta
$conn->commit();
// commit confirma

echo "Delete pronto!";
// $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
// ASSOC tira indice

// var_dump($results);
?>
