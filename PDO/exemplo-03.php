<?php
// conecção com pdo

$conn = new PDO("mysql:dbname=nome_do_banco;host=localhost","user","senha");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");
$login = "may";
$password = "qwert";
$id = "2";

$stmt->bindParam(":LOGIN",$login);
// ligamento de parametros
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID",$id);
$stmt->execute();

echo "Update pronto!";
// $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
// ASSOC tira indice


// var_dump($results);
?>
