<?php
include 'conexao.php';
$cd = $_POST['CODIGO'];
$nome = $_POST['NOME'];
$cpf = $_POST['CPF'];
$rg = $_POST['RG'];
$tel = $_POST['TEL'];
$email = $_POST['EMAIL'];
$cep = $_POST['CEP'];
$agora = mysql_query("UPDATE tb_cliente SET nm_cliente = '$nome',
											cpf_cliente = $cpf,
											rg_cliente = $rg,
											cel_cliente = $tel,
											cep_cliente = $cep,
											email_cliente = '$email'
											WHERE cd_cliente = $cd; ") or die(mysql_error());

header("Location:prin.php");