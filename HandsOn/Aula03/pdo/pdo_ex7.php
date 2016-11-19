<?php
	require('mysql.php');
	$pdo = ConnMySQL::conectar();

	$query = "SELECT * FROM usuarios WHERE id = :id;";
	$stmt = $pdo->prepare($query);

	$stmt->bindValue(":id",3);

	$stmt->execute();

	echo $count = $stmt->rowCount();

	echo '<pre>';
	$linha = $stmt->fetch(PDO::FETCH_ASSOC);
	print_r($linha);