<?php require 'conexao.php'; ?>
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
		<form action="" method="POST" role="form" nctype="multipart/form-data">
			<legend>Funcionário</legend>
		
			<div class="form-group">
				<label for="">Código</label>
				<input type="text" class="form-control" name="CODIGO" readonly placeholder="Insira o Código">
			</div>
			<div class="form-group">
				<label for="">Nome</label>
				<input type="text" class="form-control" name="NOME" placeholder="Insira o Nome">
			</div>
			<div class="form-group">
				<label for="">CPF</label>
				<input type="text" class="form-control" name="CPF" placeholder="Insira o CPF">
			</div>
			<div class="form-group">
				<label for="">RG</label>
				<input type="text" class="form-control" name="RG" placeholder="Insira o RG">
			</div>
			<div class="form-group">
				<label for="">Telefone</label>
				<input type="text" class="form-control" name="TEL" placeholder="Insira o Telefone">
			</div>
			<div class="form-group">
				<label for="">E-mail</label>
				<input type="email" class="form-control" name="EMAIL" placeholder="Insira seu E-mail">
			</div>
			<div class="form-group">
				<label for="">CEP</label>
				<input type="text" class="form-control" name="CEP" placeholder="Insira seu CPF">
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Enviar</button>
			<a href="funcionario_con.php"><button type="button" class="btn btn-info">Consulta</button></a>
		</form>
	</div>
	<br>
			<?php
/*
	$origem = 'dados\funcionario.txt';
	$cliente = array (date("[d/m/y - H:i:s]"),"
CODIGO: ",$_POST ['CODIGO'],"
NOME: ",$_POST['NOME'],"
CPF: ",$_POST ['CPF'],"
RG: ",$_POST ['RG'],"
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
			
			
			$cliente = array ($_POST ['CODIGO'],$_POST['NOME'],$_POST ['CPF'],$_POST ['RG'],$_POST ['TEL'],$_POST ['EMAIL'],$_POST ['CEP']);
			
			for ($x = 0;$x < 7; $x++)
				{
					print $cliente[$x]."<br>";

				}
*/
echo "<pre>";
				if (!empty($_POST)) {
					extract($_POST);
					$inserir = mysql_query("INSERT into tb_funcionario(nm_funcionario,
											cpf_funcionario,
											rg_funcionario,
											fixo_funcionario,
											email_funcionario,
											cep_funcionario)

											values(	'$NOME',
													'$CPF',
													'$RG',
													'$TEL',
													'$EMAIL',
													'$CEP')") or die(mysql_error());

				}else{
					echo "Aguardando...";
				}
			echo "</pre><br>";
			?>
	<script type="text/javascript" src="/BST/jquery.js"></script>
	<script type="text/javascript" src="/BST/js/bootstrap.js"></script>
</body>
</html>