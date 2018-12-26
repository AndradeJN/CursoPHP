<?php  

function __autoload($nomeClass){


	require_once ("$nomeClass.php");
}


$carro = new DelRay();

$carro->Acelerar(180);

?>