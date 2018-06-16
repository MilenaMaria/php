<?php
$conn = new mysqli("localhost","user_do_banco","senha_do_banco","nome_banco");
// verificação de banco

if($conn->connect_error){
  echo "Error: " . $conn->connect_error;
}
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

// json
$data = array();
while ($row = $result->fetch_assoc()) {
  // fetch_assoc
  // fetch_array
  array_push($data,$row);
}
// json
echo json_encode($data);
?>
