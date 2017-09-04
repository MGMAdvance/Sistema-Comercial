<?php
include 'conexao.php';
$cd = $_POST['CODIGO'];
$nome = $_POST['NOME'];
$cpf = $_POST['CPF'];
$rg = $_POST['RG'];
$tel = $_POST['TEL'];
$email = $_POST['EMAIL'];
$cep = $_POST['CEP'];
$agora = mysql_query("UPDATE tb_funcionario SET nm_funcionario = '$nome',
											cpf_funcionario = '$cpf',
											rg_funcionario = '$rg',
											fixo_funcionario = '$tel',
											cep_funcionario = '$cep',
											email_funcionario = '$email'
											WHERE cd_funcionario = $cd; ") or die(mysql_error());

header("Location:prin.php");