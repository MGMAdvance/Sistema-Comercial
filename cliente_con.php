<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/BST/css/bootstrap.css">
	<pre>
<?php
	$caminho = 'dados\cliente.txt';

	print nl2br(file_get_contents($caminho)) ;
?>
</pre>