<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select(
    "SELECT 
        * 
    FROM 
        tb_usuarios
");

echo json_encode($usuarios);*/

/*Carrega um usuário

$root = new Usuario();

$root->loadbyID(15);

echo $root;

Carrega uma lista de usuários

$lista = Usuario::getList();

echo json_encode($lista);

carrega uma lista de usuários buscando pelo login

$search = Usuario::search("jo");

echo json_encode($search);

carrega um usuario usando o login e a senha*/

$usuario = new Usuario();

$usuario->login("root", "3333");

echo $usuario;

?>