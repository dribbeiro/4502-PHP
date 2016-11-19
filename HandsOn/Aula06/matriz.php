<?php

	$matriz = array(
		"Servidores" => array(
								'user' => 'usuario',
								'host' => 'localhost',
								'password' => array('senha1'=>'1', 'senha2'=>'2')
							)
	);

	echo $matriz['Servidores']['password']['senha1'];