<?php 


function trataNome($name){

	if (!$name) {

		throw new Exception("Nenhum nome foi encontrado", 1);
	}

	echo ucfirst($name) . "<br>";

}

try{

	trataNome("Jose");
	trataNome("");


}catch (Exeption $e) {

	echo $e->getMessage();

}finally{

	echo "Execultou o Try";
}


?>