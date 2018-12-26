
<?php 

function soma(int ...$valores){

	return array_sum($valores);

}

echo soma(2, 2);
echo '<br>';
echo soma(8,9);
echo '<br>';
echo soma(7.3, 8.7);


?>