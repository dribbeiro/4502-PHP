<?php

	function autoload($classe){
		$arq = $classe.'.php';
		if(file_exists($arq)){
			require($arq);
		}else{
			echo 'Essa Classe Nao Existe';
		}
	}

	spl_autoload_register('autoload');