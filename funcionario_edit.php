<?php
include 'conexao.php';
$id = $_GET['id'];
$dados = mysql_query("SELECT * FROM tb_funcionario WHERE cd_funcionario = $id;");

while ($edit = mysql_fetch_assoc($dados)) { ?>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="/BST/css/bootstrap.css">
<div class="container">
		<form action="funcionario_edit_confirme.php" method="POST" role="form" enctype="multipart/form-data">
			<legend><?php echo $edit['nm_funcionario'];?></legend>
		
			<div class="form-group">
				<label for="">Código</label>
				<input type="text" class="form-control" name="CODIGO" readonly value="<?php echo $edit['cd_funcionario']; ?>">
			</div>
			<div class="form-group">
				<label for="">Nome</label>
				<input type="text" class="form-control" name="NOME" value="<?php echo $edit['nm_funcionario']; ?>">
			</div>
			<div class="form-group">
				<label for="">CPF</label>
				<input type="text" class="form-control" name="CPF" id="cpf" value="<?php echo $edit['cpf_funcionario']; ?>">
			</div>
			<div class="form-group">
				<label for="">RG</label>
				<input type="text" class="form-control" name="RG" id="rg" value="<?php echo $edit['rg_funcionario']; ?>">
			</div>	
			<div class="form-group">
				<label for="">Telefone</label>
				<input type="text" class="form-control" name="TEL" value="<?php echo $edit['fixo_funcionario']; ?>" id="fone">
			</div>
			<div class="form-group">
				<label for="">E-mail</label>
				<input type="email" class="form-control" name="EMAIL" value="<?php echo $edit['email_funcionario']; ?>">
			</div>
			<div class="form-group">
				<label for="">CEP</label>
				<input type="text" class="form-control" name="CEP" id="cep" value="<?php echo $edit['cep_funcionario']; ?>" >
			</div>
			
			<a href="prin.php"><button class="btn btn-default">Cancelar</button></a>
			<input type="submit" class="btn btn-info" value="Editar">
			<input type="submit" value="Excluir" class="btn btn-danger" formaction="funcionario_delete.php?id=<?php echo $edit['cd_funcionario'];?>">
</form>

<?php
}

?>