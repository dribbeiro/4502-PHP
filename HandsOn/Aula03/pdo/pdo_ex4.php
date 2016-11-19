<?php
	require('mysql.php');
	$pdo = ConnMySQL::conectar();

	$query = "INSERT INTO usuarios (nome,email,senha) VALUES (?,?,?)";
	$stmt = $pdo->prepare($query);

	$vars = array(	'Nome Stmt2',
					'email stmt2',
					'senhastmt2');

	$retorno = $stmt->execute($vars);

	var_dump($retorno);