<?php 

abstract class Animal{


	public function falar(){

		return "Late";
	}

	public function mover(){

		return "Anda";
	}

}


class Cachorro extends Animal{

	public function falar(){ // Metodo precisa ser igual para se sobrepor na instância.

		return "Late";
	} 

}

class Gato extends Animal{

	public function falar(){

		return "Mia";
	}
}

class Pato extends Animal {

	public function falar(){

		return "Cacareja";

	}

	public function mover(){

		return "Voa e " . parent::mover(); // metodo estático com a classe pai (parent)
	}
}




$pluto = new Cachorro();

echo "Cachorro: " . $pluto->falar() . "<br/>";
echo  "Movimentação:" . $pluto->mover() . "<br/>________________________________________<br/>";

$garfield = new Gato();

echo "Animal: Gato " . $garfield->falar() . "<br/>";
echo "Movimentação:" . $garfield->mover() . "<br/>________________________________________<br/>";

$donald = new Pato();

echo "Pato: " . $donald->falar() . "<br/>";
echo  "Movimentação:" . $donald->mover() . "<br/>________________________________________<br/>";


?>