<?php 

interface Carro{
	// Todos os metodos precisam ser publicos.
	public function acelerar($aceleracao);
	public function frenar($frenagem);
	public function trocarMacha($marcha);
}

abstract class Automovel implements  Carro {

	public function acelerar($aceleracao){

		echo "O veiculo acelerou " . $aceleracao . " Km/h.";
	}

	public function frenar($frenagem){

		echo "O veiculo frenou " . $frenagem . " Km/h.";
	}

	public function trocarMacha($marcha){

		echo "O veiculo está em " . $marcha. "ª";
	}

}

?>