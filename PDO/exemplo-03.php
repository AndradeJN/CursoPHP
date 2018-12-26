<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost" ,"root", "" );

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)"); // os parametros são identificados com : 

$login = "Jose"; //variaveis com parametros 
$password = "j123321";

$stmt->bindParam(":LOGIN", $login); //Cada parametro é passado separadamente atraves da variavel apos a ,
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();


echo "Dados inseridos com sucesso!";



?>