<?php
	echo '<pre>';

	$usuario =
	[
		'nome' => 'Nome do Usuario',
		'email' => 'email@4linux.com.br',
		'endereco' => [
						'rua' => 'Vergueiro',
						'numero' => '3047',
						'bairro' => 'Vila Mariana'
					  ]
	];

	print_r($usuario);
	echo '<hr />';
	$json = json_encode($usuario);
	var_dump($json);
	echo '<hr />';
	$arr = json_decode($json, true);
	var_dump($arr);
