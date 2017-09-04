<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/BST/css/bootstrap.css">
	<pre>

<?php

include 'conexao.php';

$busca = mysql_query("SELECT * FROM tb_funcionario") or die("Erro na busca".mysql_error());

if ($busca == 0) {
	echo "<h1>Nenhum registro encontrado!</h1>";
}else{
	
	while ($reg = mysql_fetch_assoc($busca)) {
	
	echo "----------------<br>";
	echo "<br> Nome: ".$reg["nm_funcionario"];
	echo "<br> CPF: ".$reg["cpf_funcionario"];
	echo "<br> RG: ".$reg["rg_funcionario"];
	echo "<br> Telefone: ".$reg["fixo_funcionario"];
	echo "<br> CEP: ".$reg["cep_funcionario"];
	echo "<br> Email: ".$reg["email_funcionario"];?>
	<br><a href="funcionario_edit.php?id=<?php echo $reg['cd_funcionario'];?>"><button class="btn btn-warning">Editar</button></a><br>
	<?php
	}
}
?>

</pre>