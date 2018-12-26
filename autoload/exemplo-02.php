<?php  

function IncluirClasses($nomeClasse){

	if (file_exists($nomeClasse . ".php")===true){
		require_once ($nomeClasse . ".php");
	}
}

spl_autoload_register("IncluirClasses"); //Classe que dispara a cadeia via instancia de objeto.
spl_autoload_register(function($nomeClasse){

	if (file_exists("Abstrata" . DIRECTORY_SEPARATOR . $nomeClasse . ".php")===true){

		require_once ("Abstrata" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
	}
}); // Resolução de diretorio.



$carro = new DelRay();

$carro->Acelerar(280);

?>