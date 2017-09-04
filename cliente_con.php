<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/BST/css/bootstrap.css">
	<pre>
<!-- php
	$caminho = 'dados\cliente.txt';

	print nl2br(file_get_contents($caminho)) ;
?>
-->

<?php

include 'conexao.php';

$busca = mysql_query("SELECT * FROM tb_cliente") or die("Erro na busca".mysql_error());

if ($busca == 0) {
	echo "<h1>Nenhum registro encontrado!</h1>";
}else{
	
	while ($reg = mysql_fetch_assoc($busca)) {
	
	echo "----------------<br>";
	echo "<br> Nome: ".$reg["nm_cliente"];
	echo "<br> CPF: ".$reg["cpf_cliente"];
	echo "<br> RG: ".$reg["rg_cliente"];
	echo "<br> Celular: ".$reg["cel_cliente"];
	echo "<br> CEP: ".$reg["cep_cliente"];
	echo "<br> Email: ".$reg["email_cliente"];?>
	<br><a href="cliente_edit.php?id=<?=$reg['cd_cliente'];?>"><button class="btn btn-warning">Editar</button></a><br>
	<?php
	}
}
?>

</pre>