<?php

	$simpleXML = new SimpleXMLElement('cursos.xml', null, true);

	$attrs = $simpleXML->curso[0]->attributes();

	$attrs->preco = '900';

	unset($attrs->periodo);

	$attrs->addAttribute('periodo', 'noturno');

	$simpleXML->saveXML('cursos.xml');

	header('Content-type: text/xml');

	echo $simpleXML->asXML();