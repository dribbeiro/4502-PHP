<?php
	require('mysql.php');
	$pdo = ConnMySQL::conectar();

	$retorno = $pdo->query('Select * from usuarios;');

	echo '<pre>';
	print_r($retorno);
	echo '<hr />';

	$linhas = $retorno->fetchAll(PDO::FETCH_OBJ);
	echo 'row'.$retorno->rowCount().'<br />';
	foreach($linhas as $linha){
		print_r($linha);
		echo '<hr />';
		echo "ID: {$linha->id} <br />";
		echo "Nome: {$linha->nome} <br />";
		echo "Email: {$linha->email} <br />";
		echo "Senha: {$linha->senha} <br />";
	}

	//FETCH_ASSOC
	//echo "ID: {$linhas[0]['id']} <br />";
	//echo "Nome: {$linhas[0]['nome']} <br />";
	//echo "Email: {$linhas[0]['email']} <br />";
	//echo "Senha: {$linhas[0]['senha']} <br />";