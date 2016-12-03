<?php
	
	$file = new SplFileObject('clientes.csv', 'r');
	$file->setFlags(SplFileObject::SKIP_EMPTY); //Ignora linhas vazias
	echo '<pre>';
	while(! $file->eof()){
		$linha = $file->fgetcsv(';');
		if($linha[0]){
			echo 'Nome: '.$linha[0].'<br />';
			echo 'E-mail: '.$linha[1].'<br />';
			echo 'Cpf: '.$linha[2].'<br />';
			echo '<hr />';
		}
	}