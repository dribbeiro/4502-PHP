<?php
	
	require("../Aula03/pdo/mysql.php");

	$pdo = ConnMySQL::conectar();
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$pdo->beginTransaction();

	try{
		for($i=0;$i <= 5; $i++){
			if($i == 5){
				$pdo->exec("fgfdsasdsadsadsa");
			} else {
				$pdo->exec("INSERT INTO usuarios (nome,email,senha) VALUES ('Usuario transaction$i','transaction@email','123456');");
			}
		}
	}catch(PDOException $e){
		echo $e->getCode();
		echo "<br />";
		echo $e->getMessage();
		$pdo->rollback();
	}

	$pdo->commit();