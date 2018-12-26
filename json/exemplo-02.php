
<?php 

$json = '[
  {
    "nome": "Joao","idade": 20},{"nome": "Maria","idade":19}]';


$data = json_decode($json, true);





var_dump($data);


 ?>