<?php
	require_once("../pdo/mysql.php");
	$pdo = ConnMySQL::conectar();

	$query = "SELECT * FROM usuarios;";

	$stmt = $pdo->prepare($query);

	$stmt->execute();

	echo "Usuarios Cadastrados: {$stmt->rowCount()} <hr />";

	$registros = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo "<h2>";
	foreach($registros as $registro){
		echo "<b>ID:</b> {$registro['id']} <br />";
		echo "<b>Nome:</b> {$registro['nome']} <br />";
		echo "<b>E-mail:</b> {$registro['email']} <br />";
		echo "<b>Senha:</b> {$registro['senha']} <br />";
		echo "<a href='editar.php?id={$registro['id']}'>Editar</a>";
		echo "<hr />";
	}
	echo "</h2>";
?>