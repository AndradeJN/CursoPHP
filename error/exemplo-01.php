<?php 

function error_hendler($code, $message, $file, $line){

	echo json_encode(array(

	"code"=>$code,
	"message"=>$message,
	"line"=>$line,
	"file"=>$file

	));	
}


set_error_handler("error_hendler");


echo 100/0;


 ?>