<?php

	$dom = new DOMDocument();
	$dom->load('cursos.xml');

	$categorias = $dom->getElementsByTagName('categoria');

	$categorias->item(1)->nodeValue = 'PHP';

	$dom->save('cursos.xml');

	header('Content-Type: text/xml');

	echo $dom->saveXML();