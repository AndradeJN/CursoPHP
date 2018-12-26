<?php  
	
	namespace Cliente; //Evita a repetição do nome Cadastro

	class Cadastro extends \Cadastro {

		public function registrarVenda(){

			echo "Registrada uma venda para o cliente " . $this->getNome();
		}
	}

?>