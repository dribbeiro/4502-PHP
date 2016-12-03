<?php

	$file = new SplFileObject('produtos.txt', 'a+');

	while(! $file->eof() ){ //->eof() = end of file
		$linha = $file->fgets();
		echo $linha.'<br />';
	}

	echo '<br />';

	foreach($file as $linha){
		echo $linha.'<br />';
	}

// Arquivo Temporario

	$temp = new SplTempFileObject();
	$temp->fwrite('Sou um arquivo temporario');
	$temp->rewind();
	echo $temp->fgets();