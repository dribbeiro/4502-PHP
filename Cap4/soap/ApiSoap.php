<?php

	ini_set('soap.wsdl_cache_enabled', '0');

	require 'Alunos.php';

	$oAluno = new Alunos();

	$serverSoap = new SoapServer('http://localhost/4502-PHP/Cap4/soap/wsdlAlunos.wsdl');

	$serverSoap->setObject($oAluno);

	$serverSoap->handle();