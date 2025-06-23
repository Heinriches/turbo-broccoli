<?php 
	require once('conexao.php');
	
	// Criar um usuário-administrador, caso não exista nenhum outro usuário.
	
	
?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Portal Hugo Cursos</title>
	</head>

	<body>
		<form method="POST" action="autenticar.php">
			<input type="text" name="usuario" placeholder="E-mail ou CPF">
			<input type="password" name="senha" placeholder="Digite a sua senha">
			<button type="submit">Logar</button>
		</form>

	</body>

</html>