<?php 



$link = "http://ciperj.org/novo/wp-content/uploads/2018/02/google-600x400.jpg";



$content = file_get_contents($link);

$parse = parse_url($link);

$basename = (basename($parse["path"]));


$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);


 
?>


<img src="<?=$basename?>">

