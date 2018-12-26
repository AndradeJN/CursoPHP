<?php 

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\PHP7;ConnectionPooling=0" ,"sa", "php7" );

$stmt =$conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll();

var_dump($results);

?>