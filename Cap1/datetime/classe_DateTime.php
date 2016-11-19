<?php
	
	echo '<pre>';

	$dt1 = new DateTime();
	print_r($dt1);
	$dt1->setDate(2017,1,1);
	$dt1->setTime(18,30,15);
	print_r($dt1);
	
	$dt2 = new DateTime('2016-11-26 00:00:00.120398');
	echo $dt2->format('d/m/Y H:i:s.u');
	echo '<br />';
	print_r($dt2);
	$dt2->modify('+ 2 days');
	print_r($dt2);
	echo $dt1->format('d/m/Y H:i:s');
	echo '<hr />';


	$dt3 = new DateTime();
	echo $dt3->format('d-m-Y H:i:s');
	$dtTimeZone = new DateTimeZone('America/Rio_Branco');
	$dt3->setTimeZone($dtTimeZone);
	echo '<br />'.$dt3->format('d-m-Y H:i:s');
