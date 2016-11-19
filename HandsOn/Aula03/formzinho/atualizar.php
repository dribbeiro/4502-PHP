<?php
	require_once("../pdo/mysql.php");
	$pdo = ConnMySQL::conectar();

	$query = "UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id;";

	$stmt = $pdo->prepare($query);

	$vars = array(':nome'=>$_POST['nome'],':email'=>$_POST['email'],':senha'=>$_POST['senha'],':id'=>$_POST['id']);
	foreach($vars as $index => $value){
		$stmt->bindValue($index,$value);
	}

	if($stmt->execute()){
		echo "Usuário atualizado com sucesso";
	} else {
		echo "Erro ao atualizado novo usuário";
	}
