<?php
include_once 'conexao.php';
if(isset($_GET['id'])) {
   $id = $_GET['id'];
}

$sql = "DELETE FROM tabela WHERE id = '$id'";
$resultado = mysqli_query($conexao, $sql);
	if($resultado){
	echo "Registro excluido com sucesso!";
	#header ('Location: consulta02.php');
	}

	else
	{
		die('Não foi possível excluir: ' . mysqli_error($conexao));

		#header('Location: consulta02.php')
	}

?>