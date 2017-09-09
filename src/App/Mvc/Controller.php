<?php
	namespace App\Mvc;

	class Controller{
		
		//Charset: UTF-8
		public function __construct(){
			header("Content-type: text/html; charset=utf-8");
		}

		//Apresentar clientes
		public function mostrarClientes(){
			$view = new View;
			$view->mostrarClientes();
		}

		public function limparPOST(){
			unset($_POST);
		}

		public function registrarCliente(){
			$model = new Model;
			$view = new View;
			
			if (empty($_POST)) {
				$view->semPost();
			}else{
				if (!$_POST['CPF'] == ""):
					$view->registrarCliente();
					$this->limparPOST();
				else:?>
					<script type="text/javascript">
						alert('Por favor, insira os dados');
					</script><?php					
				endif;
			}

		}
	}