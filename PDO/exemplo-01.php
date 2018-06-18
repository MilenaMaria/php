<?php
// conexão com pdo

$conn = new PDO("mysql:dbname=nome_do_banco;host=localhost","user","senha");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
// ASSOC tira indice

foreach ($results as $row) {
  foreach ($row as $key => $value) {
    echo "<strong>".$key." </strong> ".$value."<br/>";
  }
  echo "===========================<br/>";
}

// var_dump($results);
?>
