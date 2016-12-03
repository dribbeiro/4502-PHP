<?php

	$dom = new DOMDocument();


	//Carregando Por Meio de Uma Variavel
	$xml = file_get_contents('cursos.xml');

	$dom->loadXML($xml);

	var_dump($dom);

	//Carregando Direto de um arquivo externo
	$dom->load('cursos.xml');

	var_dump($dom);