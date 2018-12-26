<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost" ,"root", "" );

$conn->beginTransaction();

//NO UPDATE cuidado com os parenteses demasiados!!
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?"); // os parametros são identificados com : 


$id = "1";

$stmt->execute(array($id));


$conn->rollback();

echo "Dados deletados com sucesso!";



?>