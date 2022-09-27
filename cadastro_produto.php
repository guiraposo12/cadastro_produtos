<?php
include_once 'conexao.php';

	$codigo = $_POST['txtcodigo'];
	$produto = $_POST['txtproduto'];
	$descricao = $_POST['txtdescricao'];
	$data = $_POST['txtdata'];
	$valor = $_POST['txtvalor'];

	$sql = "insert into tabela (codigo, produto, descricao, data, valor) values ('$codigo', '$produto', '$descricao', '$data', '$valor')";

	$resultado = @mysqli_query($conexao, $sql);
	if ($resultado) {
		echo "Dados inseridos no banco com sucesso!";
		header('Locantion consulta05.php');
	}
	else {
		die('Não inseriu: ' . @mysqli_error($conexao));
		header('Locantion consulta05.php');
	}
mysqli_close($conexao);


?>