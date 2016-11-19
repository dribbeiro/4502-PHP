<?php
	echo '<pre>';

	$dtIntervalo = new DateInterval('P7D');

	$dt1 = new DateTime();
	$dt1->add($dtIntervalo);
	print_r($dt1);

	$dt2 = new DateTime();
	$dt2->sub($dtIntervalo);
	print_r($dt2);