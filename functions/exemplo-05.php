
<?php 


$a = 10;

function trocaValor(&$b){ //& faz a referencia à variavel fora da função levando em conta o parametro!! 

$b += 50;

return $b;

}

echo trocaValor($a);

?>