<?php
	echo '<pre>';

	$dt1 = new DateTime();
	$dt2 = new DateTime('2016-10-10');

	$diferenca = $dt1->diff($dt2);
	print_r($diferenca);
	echo $diferenca->format("%R %m Mes(es) e %d dias ou %a Dias");