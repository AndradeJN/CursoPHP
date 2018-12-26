<?php 

if (!is_dir("images")) mkdir("images");//Cria pasta se não existir

foreach (scandir("images") as $item) {
	
	if(!in_array($item, array(".", ".."))){

		unlink("images/" . $item);
	}
}

?>