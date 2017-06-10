<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/BST/css/bootstrap.css">
	<pre>
<?php
	$caminho = 'dados\produto.txt';

	if (nl2br(file_get_contents($caminho)) == null) {
		echo "Não a registros";
	}else{
		print nl2br(file_get_contents($caminho));
	}
?>
</pre>