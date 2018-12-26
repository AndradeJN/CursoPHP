<?php 

	require_once "config.php";

	use Cliente \Cadastro;

	$cad = new Cadastro;

	$cad->setNome("Jose Neto Guimarães Andrade");
	$cad->setEmail("email@mail.com");
	$cad->setSenha(123456789);

	$cad->registrarVenda();
 ?>