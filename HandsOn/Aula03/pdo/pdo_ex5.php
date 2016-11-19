<?php
	require('mysql.php');
	$pdo = ConnMySQL::conectar();

	$query = "INSERT INTO usuarios (nome,email,senha) VALUES (:nome,:email,:senha)";
	$stmt = $pdo->prepare($query);

	$vars = array(	'senha' => 'senhastmt4',
					'email' => 'Email stmt4',
					'nome'=>'Nome stmt4');

	$retorno = $stmt->execute($vars);

	var_dump($retorno);