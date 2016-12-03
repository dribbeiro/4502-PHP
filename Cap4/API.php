<?php

	require 'Contas.php';

	$dados = file_get_contents('php://input');

	$arr = json_decode($dados, true);

	$conta = new Contas();

	switch($arr['method']){
		case 'depositar':
			echo $conta->depositar($arr['params'][0]);
		break;
		case 'sacar':
			echo $conta->sacar($arr['params'][0]);
		break;
	}