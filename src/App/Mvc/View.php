<?php
	namespace App\Mvc;

	class View{
		public function render($str){
			echo $str;
		}

		public function mostrarClientes(){
			$model = new Model;
			$model->listarClientes();
		}

		// Caso não tenha nada no post
		public function semPost(){ ?>
			<script type="text/javascript">
				console.log('a variavel $_POST esta vazia');
			</script>
<?php
		}

		public function registrarCliente(){
			$model = new Model;
			$model->registrarCliente();
		}
	}