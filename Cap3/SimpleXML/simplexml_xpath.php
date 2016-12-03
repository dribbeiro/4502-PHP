<?php

	$xml = new SimpleXMLElement('cursos.xml', null, true);

	$consulta = $xml->xpath("/cursos/curso[categoria = 'Desenvolvimento']");

	echo '<pre>';
	print_r($consulta);