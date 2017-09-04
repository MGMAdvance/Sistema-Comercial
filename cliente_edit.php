<?php
include 'conexao.php';
$id = $_GET['id'];
$dados = mysql_query("SELECT * FROM tb_cliente WHERE cd_cliente = $id;");

while ($edit = mysql_fetch_assoc($dados)) { ?>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/BST/css/bootstrap.css">
<div class="container">
		<form action="cliente_edit_confirme.php" method="POST" role="form" enctype="multipart/form-data">
			<legend><?php echo $edit['nm_cliente'];?></legend>
		
			<div class="form-group">
				<label for="">Código</label>
				<input type="text" class="form-control" name="CODIGO" readonly value="<?php echo $edit['cd_cliente']; ?>">
			</div>
			<div class="form-group">
				<label for="">Nome</label>
				<input type="text" class="form-control" name="NOME" value="<?php echo $edit['nm_cliente']; ?>">
			</div>
			<div class="form-group">
				<label for="">CPF</label>
				<input type="text" class="form-control" name="CPF" id="cpf" value="<?php echo $edit['cpf_cliente']; ?>">
			</div>
			<div class="form-group">
				<label for="">RG</label>
				<input type="text" class="form-control" name="RG" id="rg" value="<?php echo $edit['rg_cliente']; ?>">
			</div>	
			<div class="form-group">
				<label for="">Telefone</label>
				<input type="text" class="form-control" name="TEL" value="<?php echo $edit['cel_cliente']; ?>" id="fone">
			</div>
			<div class="form-group">
				<label for="">E-mail</label>
				<input type="email" class="form-control" name="EMAIL" value="<?php echo $edit['email_cliente']; ?>">
			</div>
			<div class="form-group">
				<label for="">CEP</label>
				<input type="text" class="form-control" name="CEP" id="cep" value="<?php echo $edit['cep_cliente']; ?>" >
			</div>
			
			<a href="prin.php"><button class="btn btn-default">Cancelar</button></a>
			<input type="submit" class="btn btn-info" value="Editar">
			<input type="submit" value="Excluir" class="btn btn-danger" formaction="cliente_delete.php?id=<?php echo $edit['cd_cliente'];?>">
</form>

<?php
}

?>