<?php

	class calculadoraMedia{

		public $nota1;
		public $nota2;

		const APROVADO = 8;
		const REPROVADO = 3;

		public function media(){
			return ($this->nota1 + $this->nota2)/ 2;
		}

	}

	$obj = new calculadoraMedia();
	$obj->nota1 = 6;
	$obj->nota2 = 8;
	$media = $obj->media();

	if($media >= calculadoraMedia::APROVADO){
		echo "Aluno Aprovado: {$media}";
	}else if($media <= calculadoraMedia::REPROVADO){
		echo "Aluno Reprovado: {$media}";
	}else{
		echo "Aluno em recuperação: {$media}";
	}