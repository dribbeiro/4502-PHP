<?php

	ini_set('soap.wsdl_cache_enabled', '0');

	$client = new SoapClient('http://localhost/4502-PHP/Cap4/soap/wsdlAlunos.wsdl');

	$retorno = json_decode($client->listarAlunos(),true);

	var_dump($retorno);

	$aluno = json_decode($client->listarPorId(4));

	var_dump($aluno);