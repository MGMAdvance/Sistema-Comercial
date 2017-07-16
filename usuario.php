<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="vendor\components\bootstrap\css\bootstrap.css">
	<link rel="stylesheet" type="text/css" href="vendor\fortawesome\font-awesome\css\font-awesome.css">
	<title></title>
	<style type="text/css">
		pre{
			background-color: black;
			font: arial;
			font-size:12;
			color:white;
		}
	</style>
</head>
<body>
	<div class="container">
		<form action="" method="POST" role="form">
			<legend>Usuário</legend>
		
			<div class="form-group">
				<label for="">Código</label>
				<input type="text" class="form-control" name="CODIGO" placeholder="Insira o Código">
			</div>
			<div class="form-group">
				<label for="">Nome</label>
				<input type="text" class="form-control" name="NOME" placeholder="Insira o Nome">
			</div>
			<div class="form-group">
				<label for="">Senha</label>
				<input type="password" class="form-control" name="SENHA" placeholder="Insira o senha">
			</div>
			<div class="form-group">
				<label for="">Código funcionário</label>
				<input type="text" class="form-control" name="CDFUN" placeholder="Insira o Código do funcionário">
			</div>
			
			
		
			<button type="submit" class="btn btn-primary">Enviar</button>
			<a href="usuario_con.php"><button type="button" class="btn btn-info">Consulta</button></a>
		</form>
		<br>
			<?php
			echo "<pre>";
			$cliente = array (date("[d/m/y - H:i:s]"),"
CODIGO: ",$_POST ['CODIGO'],"
NOME: ",$_POST['NOME'],"
SENHA: ",$_POST ['SENHA'],"
COD. FUNCIONARIO: ",$_POST['CDFUN'],"

");
			$origem = 'dados\usuario.txt';
			if($cliente[2] != ""){
			if(file_put_contents($origem, $cliente,FILE_APPEND)){
				echo "Cadastrado com sucesso";
			}else{
				echo "Erro";
			}
		}
			for ($x = 0;$x < 3; $x++)
				{
					print $cliente[$x]."<br>";

				}
			

			echo "</pre><br>";
			?>
	</div>
		<script type="text/javascript" src="vendor\components\jquery\jquery.js"></script>
		<script type="text/javascript" src="vendor\components\bootstrap\js\bootstrap.js"></script>
</body>
</html>