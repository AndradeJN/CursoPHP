<?php 

	$diaDaSemana = date("w");

	switch ($diaDaSemana) {
	
	case 0:
	echo "Domingo";
	break;

	case 1:
	echo "Segunda-Feira";
	break;

	case 2: 
	echo "Terça-Feira";
	break;

	default:
	echo "data inválida";
	break;

	}

 ?>