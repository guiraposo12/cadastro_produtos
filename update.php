<?php
include_once('conexao.php');

if(isset($_POST['btn-editar'])) {
	 $codigo = $_POST['codigo'];
	 $produto = $_POST['produto'];
	 $descricao = $_POST['descricao'];
	 $valor = $_POST['valor'];
	 $id = $_POST['id'];  

	 $sql = "UPDATE tabela SET codigo = '$codigo', produto = '$produto', descricao = '$descricao', valor = '$valor' WHERE id = '$id'";

	 if(mysqli_query($conexao, $sql)){
	 	echo "atualizado com sucesso";
	 	#header ('location: consulta02.php');
	 }
	 else{
	 	echo "erro ao atualizar";
	 	#header ('location: consulta02.php');
	 }
}
?>