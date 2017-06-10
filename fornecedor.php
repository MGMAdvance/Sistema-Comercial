<?php
	include_once('vCPF-CNPJ.php');
?>]
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/BST/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/BST/css/font-awesome.css">
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
			<legend>Fornecedor</legend>
		
			<div class="form-group">
				<label for="">Código</label>
				<input type="text" class="form-control" NAME="CODIGO"  placeholder="Insira o Código">
			</div>
			<div class="form-group">
				<label for="">Nome</label>
				<input type="text" class="form-control" NAME="NOME" placeholder="Insira o Nome">
			</div>
			<div class="form-group">
				<label for="">CNPJ</label>
				<input type="text" class="form-control" NAME="CNPJ" placeholder="Insira o CNPJ">
			</div>
			<div class="form-group">
				<label for="">J.E</label>
				<input type="text" class="form-control" NAME="JE" placeholder="Insira o J.E">
			</div>
			<div class="form-group">
				<label for="">Telefone</label>
				<input type="text" class="form-control" NAME="TEL" placeholder="Insira o Telefone">
			</div>
			<div class="form-group">
				<label for="">E-mail</label>
				<input type="email" class="form-control" NAME="EMAIL" placeholder="Insira seu E-mail">
			</div>
			<div class="form-group">
				<label for="">CEP</label>
				<input type="text" class="form-control" NAME="CEP" placeholder="Insira seu CEP">
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Enviar</button>
			<a href="fornecedor_con.php"><button type="button" class="btn btn-info">Consulta</button></a>

		</form>
				<br>
		<link rel="stylesheet" type="text/css" href="/BST/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/BST/css/font-awesome.css">
	<?php
		$origem = 'dados\Fornecedor.txt';
		$cliente = array (date("[d/m/y - H:i:s]"),"
CODIGO: ",$_POST ['CODIGO'],"
NOME: ",$_POST['NOME'],"
CNPJ: ",$_POST ['CNPJ'],"
JE: ",$_POST ['JE'],"
TELEFONE: ",$_POST ['TEL'],"
EMAIL: ",$_POST ['EMAIL'],"
CEP: ",$_POST ['CEP'],"

");
		if($cliente[2] != ""){
			if(file_put_contents($origem, $cliente,FILE_APPEND)){
				echo "Cadastrado com sucesso";
			}else{
				echo "Erro";
			}
		}



			echo "<pre>";

			$cliente = array ($_POST ['CODIGO'],$_POST['NOME'],$_POST ['CNPJ'],$_POST['JE'],$_POST ['TEL'],$_POST ['EMAIL'],$_POST ['CEP']);
			for ($x = 0;$x < 12; $x++)
				{
					print $cliente[$x]."<br>";

				}

			if(validarCNPJ($_POST['CNPJ'])){
				echo "CNPJ Correto";
			}else{
				echo "CNPJ incorreto";
			}

			echo "</pre><br>";


			?>
	</div>
	<script type="text/javascript" src="/BST/jquery.js"></script>
	<script type="text/javascript" src="/BST/js/bootstrap.js"></script>
</body>
</html>