<meta charset="utf-8">
<style type="text/css">
	.v{
		background-color: red;
		color: white;
	}
	.b{
		background-color: green;
		color: white;
	}
</style>
<center>
<?php

$origem = array (
	'dados/cliente.txt',
	'dados/funcionario.txt',
	'dados\Fornecedor.txt',
	'dados\produto.txt',
	'dados\usuario.txt'
	);
$destino = array (
	'backup\cliente-backup.txt',
	'backup\funcionario-backup.txt',
	'backup\Fornecedor-backup.txt',
	'backup\produto-backup.txt',
	'backup\usuario-backup.txt'
);

mkdir('backup');

for ( $i=0; $i < count($origem) ; $i++ ):?>

	<?php if ( copy($origem[$i],$destino[$i]) ):?>

		<h1 class="b">Copiado com sucesso</h1>

	<?php else: ?>

		<h1 class="v">Falha ao copiar</h1>

	<?php endif;
	endfor ?>
</center>
