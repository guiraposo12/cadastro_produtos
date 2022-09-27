<?php
$servidor = "localhost";
$usuario = "root";
$senha = "etecjau";
$banco = "banco";

$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

#mysql_set_charset($conexao,"utf8");

if (mysqli_connect_error()){
	echo "CONNECTION ERROR: ". mysqli_connect_error();
}

?>