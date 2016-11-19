<?php
	require('mysql.php');
	$pdo = ConnMySQL::conectar();

	$query = "INSERT INTO usuarios (nome,email,senha) VALUES (:nome,:email,:senha)";
	$stmt = $pdo->prepare($query);

	$stmt->bindValue(":nome",'Nome stmt5');
	$stmt->bindValue(":email",'Email stmt5');
	$stmt->bindValue(":senha",'senha stmt5');

	//$stmt->bindParam(":nome",$nome);

	$retorno = $stmt->execute();

	var_dump($retorno);