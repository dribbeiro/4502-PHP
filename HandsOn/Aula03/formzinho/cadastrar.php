<?php
	require_once("../pdo/mysql.php");
	$pdo = ConnMySQL::conectar();

	$query = "INSERT INTO usuarios (nome,email,senha) VALUES (:nome,:email,:senha);";

	$stmt = $pdo->prepare($query);

	$vars = array(':nome'=>$_POST['nome'],':email'=>$_POST['email'],':senha'=>$_POST['senha']);

	foreach($vars as $index => $value){
		$stmt->bindValue($index,$value);
	}

	if($stmt->execute()){
		echo "Usuário cadastrado com sucesso";
	} else {
		echo "Erro ao cadastrar novo usuário";
	}
