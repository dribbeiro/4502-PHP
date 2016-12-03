<?php

	$simpleXML = new SimpleXMLElement('cursos.xml', null, true);

	$simpleXML->curso[0]->categoria = 'PHP';

	$simpleXML->saveXML('cursos.xml');

	header('Content-Type: text/xml');

	echo $simpleXML->asXML();