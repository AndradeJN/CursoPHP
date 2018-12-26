<?php 

	$conn = new mysqli("localhost", "root", "", "dbphp7");

	if($conn->connect_error){

		echo "Erro: " . $conn->connect_error;
	}


	$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY stcadastro");

	while ($row = $result->fetch_array()) {

		var_dump($row);
	}

?>