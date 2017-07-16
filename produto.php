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
			<legend>Produto</legend>
		
			<div class="form-group">
				<label for="">Código</label>
				<input type="text" class="form-control" NAME="CODIGO" placeholder="Insira o Código">
			</div>
			<div class="form-group">
				<label for="">Nome</label>
				<input type="text" class="form-control" NAME="NOME" placeholder="Insira o Nome">
			</div>
			<div class="form-group">
				<label for="">Tipo</label>
				<input type="text" class="form-control" NAME="TIPO" placeholder="Insira o tipo">
			</div>
			<div class="form-group">
				<label for="">Data de compra</label>
				<input type="text" class="form-control" NAME="DTCP" placeholder="Insira a data da compra">
			</div>
			<div class="form-group">
				<label for="">Valor compra</label>
				<input type="text" class="form-control" NAME="VC" placeholder="Insira o valor da compra">
			</div>
			<div class="form-group">
				<label for="">Data validade</label>
				<input type="text" class="form-control" NAME="DTV" placeholder="Insira a Data de validade">
			</div>
			<div class="form-group">
				<label for="">Quantidade</label>
				<input type="text" class="form-control" NAME="QT" placeholder="Insira a Quantidade">
			</div>
			<div class="form-group">
				<label for="">Codigo fornecedor</label>
				<input type="text" class="form-control" NAME="CF" placeholder="Insira seu CPF">
			</div>
			
		
			<button type="submit" class="btn btn-primary">Enviar</button>
			<a href="produto_con.php"><button type="button" class="btn btn-info">Consulta</button></a>
		</form>
	</div>
	<?php
			echo "<pre>";
			$cliente = array (date("[d/m/y - H:i:s]"),"
CODIGO: ",$_POST ['CODIGO'],"
NOME: ",$_POST['NOME'],"
TIPO: ",$_POST ['TIPO'],"
DATA DE COMPRA: ",$_POST ['DTCP'],"
VALOR DA COMPRA: ",$_POST ['VC'],"
DATA VALIDADE: ",$_POST ['DTV'],"
QUANTIDADE: ",$_POST ['QT'],"
CODIGO FORNECEDOR: ",$_POST ['CF'],"

");
			$origem = 'dados\produto.txt';
		if($cliente[2] != ""){
			if(file_put_contents($origem, $cliente,FILE_APPEND)){
				echo "Cadastrado com sucesso";
			}else{
				echo "Erro";
			}
		}
			for ($x = 0;$x < 7; $x++)
				{
					print $cliente[$x]."<br>";

				}


			echo "</pre><br>";
			?>

		<script type="text/javascript" src="vendor\components\jquery\jquery.js"></script>
		<script type="text/javascript" src="vendor\components\bootstrap\js\bootstrap.js"></script>
</body>
</html>