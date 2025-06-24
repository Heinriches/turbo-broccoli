<?php 
	require_once('conexao.php');

	// Criar senha criptografada, a partir do valor da variável'senha'.
	$senha = '123';
	$senha_crip = md5($senha);


	// Verificar se existe um usuário administrativo já criado no Banco-de-Dados.
	$query = $pdo->query("SELECT * FROM usuarios WHERE nivel = 'Administrador' ");
	$res = count($query->fetchAll(PDO::FETCH_ASSOC));
	echo($res);

	// Criar um usuário-administrador, caso não exista nenhum outro usuário.
	if($res == 0){
		$pdo ->	query("INSERT INTO usuarios SET 
												nome = 'Administrador',
												cpf = '000.000.000-00',
												usuario = 'contato@mail.com',
												senha = '$senha',
												senha_crip = '$senha_crip',
												nivel = 'Administrador',
												foto = 'sem-perfil.jpg',
												id_pessoa = 1,
												ativo = 'Sim',
												data = curDate()");
	};
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