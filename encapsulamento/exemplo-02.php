<?php 

class Pessoa{

	public $nome = "Rasmos Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){

		echo get_class($this) . "<br/>";

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
	}

}

class Programador extends Pessoa {

	public function verDados(){

		echo get_class($this) . "<br/>";

		echo $this->nome . "<br/>";
		echo $this->idade . "<br/>";
		echo $this->senha . "<br/>";
	}

}

$objeto = new Pessoa();

//echo $objeto->nome . "<br/>";

//$objeto = new Programador();

$objeto->verDados();


?>