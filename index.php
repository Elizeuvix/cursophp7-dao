<?php

require_once("config.php");

//Carrega um usuario
//$user = new Usuario();
//$user->loadById(4);
//echo $user;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando por login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando um login e a senha
//$usario = new Usuario();
//$usario->login("Francisco", "q1w2e3");
//echo $usario;

//!INSERE NOVO USUÁRIO contem erro
//$aluno = new Usuario("Aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

$usario = new Usuario();
$usario->loadById(5);
$usario->update("Manoel Nobrega", "auysgduysa");

echo $usario;

?>