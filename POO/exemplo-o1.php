<?php 

 class Pessoa {

	public $nome; //Atributo

	public function falar(){ //Método

		return "Meu nome é ".$this->nome;
	}

}

$meunome = new Pessoa;
$meunome->nome = "Jose Neto Guimarães";
echo $meunome->falar();


 ?>