<?php

	function autoload($classe){
		$arq = str_replace('\\',DIRECTORY_SEPARATOR, $classe).'.php';
		if(file_exists($arq)){
			require($arq);
		}else{
			echo 'Classe Nao Existe';
		}
	}

	spl_autoload_register('autoload');