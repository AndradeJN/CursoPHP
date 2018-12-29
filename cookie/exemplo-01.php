<?php 

$data = array(

	"Nome da empresa"=>"Alpha Net ID",
	"Presidente"=>"Jose Neto Guimarães"
); 

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK";

?>