<?php

	$xml = file_get_contents('cursos.xml');
	$simpleXML = new SimpleXMLElement($xml);
	var_dump($simpleXML);

	$simpleXML2 = new SimpleXMLElement('cursos.xml', null, true);
	var_dump($simpleXML2);