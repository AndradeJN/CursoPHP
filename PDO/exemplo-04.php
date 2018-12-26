<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost" ,"root", "" );


//NO UPDATE cuidado com os parenteses demasiados!!
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID"); // os parametros são identificados com : 

$login = "Agora"; //variaveis com parametros 
$password = "j123opss";
$id = "2";

$stmt->bindParam(":LOGIN", $login); //Cada parametro é passado separadamente atraves da variavel apos a ,
$stmt->bindParam(":PASSWORD", $password);

$stmt->bindParam(":ID", $id);

$stmt->execute();


echo "Dados alterados com sucesso!";



?>