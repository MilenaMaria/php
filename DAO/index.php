<?php
require_once("config.php");

/* Carrega um determinado usuario
$root = new Usuario();
$root->loadById(3);
echo $root;
*/
// =========================================
/* Carrega uma lista de usuarios
$lista = Usuario::getList();

echo json_encode($lista);
*/
// ==========================================
/* Carrega um lista buscando pelo login
$search = Usuario::search("jo");
echo json_encode($search);
*/
// ==========================================
/* Carrega um usario usando login e senha
$usuario = new Usuario();
$usuario->login("user","12345");
echo $usuario;
*/

// =====================================
/* criando um novo usuário
$aluno = new Usuario("aluno","@alun0");

// $aluno->setDeslogin("aluno");
// $aluno->setDessenha("@aluno");
$aluno->insert();

echo $aluno;
*/

// ===================================
/* Fazendo update de dados
$usuario = new Usuario();
$usuario->loadById(10);

$usuario->update("professor","@professor");
echo $usuario;
*/
// ======================================

// excluindo dados
$usuario = new Usuario();
$usuario->loadById(11);
$usuario->delete();

echo $usuario;

// $sql = new Sql;
// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($usuarios);
?>
