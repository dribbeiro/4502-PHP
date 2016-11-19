<?php
	require('mysql.php');
	$pdo = ConnMySQL::conectar();

	$retorno = $pdo->query('Select * from usuarios;');

	echo '<pre>';
	print_r($retorno);
	echo '<hr />';

	//Trabalhando PDO com retorno de Array Associativo
	while($linhaArr = $retorno->fetch(PDO::FETCH_ASSOC)){
		echo "ID: {$linhaArr['id']} <br />";
		echo "Nome: {$linhaArr['nome']} <br />";
		echo "Email: {$linhaArr['email']} <br />";
		echo "Senha: {$linhaArr['senha']} <br />";
	}

	echo "<br /><hr /><br />";
	//Trabalhando PDO com retorno de Objeto
	//$linhaObj = $retorno->fetch(PDO::FETCH_OBJ);
	//echo "ID: {$linhaObj->id} <br />";
	//echo "Nome: {$linhaObj->nome} <br />";
	//echo "Email: {$linhaObj->email} <br />";
	//echo "Senha: {$linhaObj->senha} <br />";


	//print_r($linha);