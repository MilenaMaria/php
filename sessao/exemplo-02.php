<?php
require_once("config.php");
// session_start();

session_unset($_SESSION['nome']);
// limpa a variavel
echo $_SESSION['nome'];

// session_destroy(['nome']);
// destroi a variavel
?>
