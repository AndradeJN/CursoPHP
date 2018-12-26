
<?php 

require_once("config.php");

session_unset(); //Limpa a variavel de sessão mas ele deixa o usuário na sessão

session_destroy(); //Nesse caso ele destroi a sessão e exige por exemplo login

echo $_SESSION['nome'];



 ?>