<?php
include 'conexao.php';
$cd = $_POST['CODIGO'];
$agora = mysql_query("DELETE FROM tb_cliente WHERE cd_cliente = $cd;") or die(mysql_error());
echo "<script>alert('Excluido com sucesso o cliente');window.location.href='prin.php';</script>";