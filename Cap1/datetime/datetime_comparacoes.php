<?php

	$dt1 = new DateTime();
	$dt2 = new DateTime('2016-10-10'); //vencimento
	print_r($dt1);
	print_r($dt2);

	if($dt1 > $dt2){
		echo 'Boleto Vencido';
	}

	if($dt1 <= $dt2){
		echo 'Boleto Valido';
	}

	if($dt1 == $dt2){
		echo 'Datas Iguais';
	}