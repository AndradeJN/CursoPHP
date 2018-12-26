<?php 

require_once ("config.php");

/*Carrega apenas 1 usuario

$user = new Usuario();
$user->loadById(3);
echo $user;

*/

/*

Carrega uma lista de usuarios

$lista = Usuario::getList();

echo json_encode($lista);

*/





//$search = Usuario::search('A');

//echo json_encode($search);




/* 


$login = new Usuario();

$login->login("user","123456");

echo $login;
*/

/* 

$usuario = new usuario();

$usuario->loadById(2);

$usuario->update("Andrade", "picadasgalaxias"); 

echo $usuario;

*/

$usuario = new Usuario();

$usuario->loadById(1);

$usuario->delete();

echo $usuario;

$usuario->delete();

?>