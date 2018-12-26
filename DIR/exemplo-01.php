<?php 

$name = "images";

if (!is_dir($name)){

	mkdir($name);

	echo "Diretório " . $name .  "criado como sucesso!!";
}
else{

	rmdir($name);

	echo "Já existe um diretório com o nome name e ele foi removido!";
}

?>