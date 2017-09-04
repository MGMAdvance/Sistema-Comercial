<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/BST/css/bootstrap.css">
	<pre>
<?php

include 'conexao.php';

$busca = mysql_query("SELECT * FROM tb_fornecedor") or die("Erro na busca".mysql_error());

if ($busca == 0) {
	echo "<h1>Nenhum registro encontrado!</h1>";
}else{
	
	while ($reg = mysql_fetch_assoc($busca)) {
	
	echo "----------------";
	echo "<br> Nome: ".$reg["nm_fornecedor"];
	echo "<br> CNPJ: ".$reg["cnpj_fornecedor"];
	echo "<br> IE: ".$reg["ie_fornecedor"];
	echo "<br> Telefone: ".$reg["fixo_fornecedor"];
	echo "<br> CEP: ".$reg["cep_fornecedor"];
	echo "<br> Email: ".$reg["email_fornecedor"];?>
	<br><a href="cliente_edit.php?id=<?=$reg['cd_cliente'];?>"><button class="btn btn-warning">Editar</button></a><br>
	<?php
	}
}
?>
</pre>