<?php
include_once ('conexao.php');
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Sistema de Cadastro de produtos</title>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet"  href="css/materialize.min.css">

	<meta name="viewport" content="width=device-width, initial-scaled=1.0"/>
</head>

<body>

<div class="row">
	<div class="col s12 m8 push-m2">
	<h3 class="light"> Produtos Cadastrados </h3>
	<table class="striped"> 
		<tr>   
			<th> Código    </th>
			<th> Produtos  </th>
			<th> Descrição </th>
			<th> Valor	   </th>
			
<tbody>
<?php
	include_once ('conexao.php');

	$sql 		= "SELECT * FROM tabela";
	$resultado	= mysqli_query($conexao, $sql);

	if (mysqli_num_rows($resultado)>0){
	
 while ($dados = mysqli_fetch_array($resultado))

{
	?>
	<tr>
		<td><?php echo $dados['codigo']; ?></td>
		<td><?php echo $dados['produto']; ?></td>
		<td><?php echo $dados['descricao']; ?></td>
		<td><?php echo $dados['valor']; ?></td>

		<td> <a href="editar.php?id=<?php echo $dados['id']; ?>"
		class="btn-floating green"><i class="material-icons">edit</i>></a> </td>

		<td> <a href="delete.php?id=<?php echo $dados['id']; ?>"
		class="btn-floating red"><i class="material-icons">delete</i>></a> </td>	



	</tr>
	<?php	
}
}
	?>


</tbody>
</table>
<br>
<a href="adicionar_produto.php" class="btn">Adicionar Produto </a>

</div>
</div>
</body>
</html>