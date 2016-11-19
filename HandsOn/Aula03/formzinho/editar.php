<!DOCTYPE html>
<html>
	<head>
		<title>Formzinho</title>
	</head>
	<body>

		<fieldset>
			<legend>Form</legend>
			<form action="atualizar.php" method="POST">
				<input id="nome" name="nome" type="text" placeholder="Nome" />
				<input id="email" name="email" type="text" placeholder="E-mail" />
				<input id="senha" name="senha" type="password" placeholder="Senha" />
				<input id="id" name="id" type="hidden" value="<? echo $_GET['id']; ?>" />
				<input type="submit" value="Enviar" />
			</form>
			<a href="listar.php">Listar Usuarios</a>
		</fieldset>

	</body>
</html>