<?php
// recuperar sessão por id
session_id('valor_do_id');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);
// id de sessão
// esconder codigo de // são boas praticas de programaçãoptimize


?>
