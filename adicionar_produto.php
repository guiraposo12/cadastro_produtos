
<html>
<head>

	<title>SISTEMA DE CADASTRO DE PRODUTOS</title>
	<link rel="stylesheet" href="css/materialize.min.css">
	
	
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
</head>

<body>
	<div class="row">
		<div class="col s12 m6 push-m3">
			<h3 class="light">NOVO PRODUTO</h3>
			<form action="cadastro_produto.php" method="POST">
				<div class="input-field col s12">
					<input type="text" name="txtcodigo" id="codigo">
					<label for="codigo">CODIGO</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="txtproduto" id="produto">
					<label for="produto">PRODUTO</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="txtdescricao" id="descricao">
					<label for="descricao">DESCRICAO</label>	
				</div>

				<div class="input-field col s12">
					<input type="date" name="txtdata" id="data">
					<label for="data">DATA</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="txtvalor" id="valor">
					<label for="valor">VALOR</label>
				</div>

				<button type="submit" name="btncadastrar" class="btn">CADASTRAR</button>

				<a href="consulta01.php" class="btn green">LISTA DE PRODUTOS</a>
				
			</form>
		</div>
	</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>


</body>
</html>