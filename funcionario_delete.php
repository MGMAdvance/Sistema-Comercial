<?php
include 'conexao.php';
$cd = $_POST['CODIGO'];
$agora = mysql_query("DELETE FROM tb_funcionario WHERE cd_funcionario = $cd;") or die(mysql_error());
header("Location:prin.php");
echo "<script>alert('Excluido com sucesso o funcionario');</script>";