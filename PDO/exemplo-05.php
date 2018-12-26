<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost" ,"root", "" );


//NO UPDATE cuidado com os parenteses demasiados!!
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID"); // os parametros são identificados com : 


$id = "1";


$stmt->bindParam(":ID", $id);

$stmt->execute();


echo "Dados deletados com sucesso!";



?>