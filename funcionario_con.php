<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="vendor\components\bootstrap\css\bootstrap.css">
	<pre>
<?php
	$caminho = 'dados\funcionario.txt';

	if (nl2br(file_get_contents($caminho)) == null) {
		echo "Não a registros";
	}else{
		print nl2br(file_get_contents($caminho));
	}
?>
</pre>