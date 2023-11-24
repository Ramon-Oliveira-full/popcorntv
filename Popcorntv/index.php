<?php

require 'repositorio.class.php';

$filmes = $repositorio->getListarFilme();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Popcorn TV</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<h1>Página Inicial</h1>
	<form action="inclui_filme.php" method="POST">

		<div class="mb-3">
			<label>Filme:</label>
			<input type="text" name="titulo" value="" class="form-control">
		</div>

		<div class="mb-3">
			<label>Sinopse:</label>
			<textarea name="sinopse" class="form-control"></textarea>
		</div>
		
		<div class="mb-3">
		<label>Quantidade:</label>
		<input type="text" name="quantidade" value="" class="form-control">
		</div>
		
		<div class="mb-3">
			<label>Trailer:</label>
			<input type="text" name="trailer" value="" class="form-control">
		</div>
		
		<div class="mb-31">
			<input type="submit" class="btn btn-primary">
		</div>
	</form>

	<?php

	echo "<table class='table table-hover table-striped-columns'>
		<tr>
			<th>Código</th>
			<th>Filme</th>
			<th>Ações</th>
		</tr>";

	while ($filmeTemporario = array_shift($filmes)) {
		echo "<tr>
			<td>".$filmeTemporario->getCodigo()."</td>
			<td>".$filmeTemporario->getTitulo()."</td>
			<td>Editar | Atualizar </td>
		</tr>";
	}

	?>
	
	<!--<table class='table table-hover table-striped'>
		<tr>
			<th>Código</th>
			<th>Filme</th>
			<th>Ação</th>
		</tr>
		<tr>
			<th>1</th>
			<th>Ace Ventura Um detetive especial</th>
			<th>Excluir | Alterar</th>
		</tr>
		<tr>
			<th>2</th>
			<th>O Mascara</th>
			<th>Excluir | Alterar</th>
		</tr>
</table>  -->

</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>