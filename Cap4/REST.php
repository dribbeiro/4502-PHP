<?php

	require 'Alunos.php';

	$alunos = new Alunos();

	$dados = json_decode(file_get_contents('php://input'), true);

	$verbo = $_SERVER['REQUEST_METHOD'];

	switch($verbo){
		case 'POST':
			if($alunos->inserir($dados) == 1){
				echo json_encode(['resposta' => 'Dados Inserido Com Sucesso']);
			}else{
				echo json_encode(['resposta' => 'Falha ao inserir dados']);
			}
		break;

		case 'PUT':
			if($alunos->atualizar($dados) == 1){
				echo json_encode(['resposta' => 'Dados Alterados Com Sucesso']);
			}else{
				echo json_encode(['resposta' => 'Falha ao alterar dados']);
			}
		break;

		case 'DELETE':
			if($alunos->deletar($dados) == 1){
				echo json_encode(['resposta' => 'Dados Deletados Com Sucesso']);
			}else{
				echo json_encode(['resposta' => 'Falha ao deletar dados']);
			}
		break;

		case 'GET':
			if(isset($_GET['id'])){
				echo $alunos->listarPorId($_GET['id']);
			}else{
				echo $alunos->listar();
			}
		break;
	}