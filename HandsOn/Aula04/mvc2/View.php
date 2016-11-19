<?php
	class View{
		private $model;
		private $controller;

		public function __construct(Model $model, Controller $controller){
			$this->model = $model;
			$this->controller = $controller;
		}

		public function montarForm($id=null){
			$form = "";

			if(!$id){
				$form .= "<form action='mvc.php?action=cadastrar' method='POST'>";
			}else{
				$form .= "<form action='mvc.php?action=atualizar&id=$id' method='POST'>";
			}
				$form .= "<input type='text' name='nome' id='nome' placeholder='Nome' />";
				$form .= "<input type='text' name='email' id='email' placeholder='Email' />";
				$form .= "<input type='password' name='senha' id='senha' placeholder='Senha' />";
				$form .= "<input type='submit' value='Enviar' />";
			$form .= "</form>";

			return $form;
		}

		public function listarUsuarios(){
			$registros = $this->model->buscarRegistros();

			echo '<table border="1" width="80%">';
			echo 	'<caption>Usuarios</caption>';
			echo 	'<thead>';
			echo 		'<tr>';
			echo 			'<th>ID</th>';
			echo 			'<th>Nome</th>';
			echo 			'<th>E-Mail</th>';
			echo 			'<th>Senha</th>';
			echo 		'</tr>';
			echo 	'</thead>';	
			echo 	'<tbody>';

			foreach($registros as $index){
			echo 	'<tr>';
			echo 		"<td>{$index['id']}</td>";
			echo 		"<td>{$index['nome']}</td>";
			echo 		"<td>{$index['email']}</td>";
			echo 		"<td>{$index['senha']}</td>";
			echo 	'</tr>';
			}

			echo 	'</tbody>';
			echo '</table>';
		}
	}