<?php
	require('mysql.php');
	//require('psql.php');

	$pdo = ConnMySQL::conectar();
	//$pdo = ConnPSQL::conectar();

	$exec = $pdo->exec("INSERT INTO usuarios (nome,email,senha) VALUES('Primeiro cadastro','primeiro@email','1234')");

	var_dump($exec);