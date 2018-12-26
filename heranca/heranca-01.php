<?php 

	class Documento {

		private $numero;

		public function getNumero()
		{
			return $this->numero;
		}

		public function setNumero($numero)
		{
			$this->numero = $numero;
		}
	}

	class CPF extends Documento {

		public function validar():bool
		{
			$numeroCPF = $this->getNumero();
			//Validação do CPF

			return true;
		}
	}

	$doc = new CPF();

	$doc->setNumero("111222333-85");

	$doc->validar();

	var_dump($doc);


?>