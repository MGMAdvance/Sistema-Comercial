<?php	require 'header.php'; ?>
<div class="col-sm-offset-4">
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-6 col-sm-3 col-md-2">
			<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>
				<div class="row">
					<div class="col-xs-12 text-center">
						<i class="fa fa-plus fa-5x"></i>
					</div>
					<div class="col-xs-12 text-center">
						<p>Novo Cliente</p>
					</div>
				</div>
			</a>
		</div>
		<div class="col-xs-6 col-sm-3 col-md-2">
			<a class="btn btn-default" data-toggle="modal" href='#modal-con'>
				<div class="row">
					<div class="col-xs-12 text-center">
						<i class="fa fa-user fa-5x"></i>
					</div>
					<div class="col-xs-12 text-center">
						<p>Consulta de clientes</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>
</div>

<!-- modal / Registro -->

<form method="POST" action="" enctype="multipart/form-data">
	<div class="modal fade" id="modal-id">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h2 class="modal-title">Registrar cliente</h2>
				</div>
				<div class="modal-body">
					
					<!-- conteudo -->
					<div class="form-group">
						<label for="">Código</label>
						<input type="text" class="form-control" name="CODIGO" readonly placeholder="Insira o Código">
					</div>
					<div class="form-group">
						<label for="">Nome</label>
						<input type="text" class="form-control" name="NOME" placeholder="Insira o Nome">
					</div>
					<div class="form-group">
						<label for="">CPF</label>
						<input type="text" class="form-control" name="CPF" id="cpf" placeholder="Insira o CPF">
					</div>
					<div class="form-group">
						<label for="">RG</label>
						<input type="text" class="form-control" name="RG" id="rg" placeholder="Insira o RG">
					</div>
					<div class="form-group">
						<label for="">Telefone</label>
						<input type="text" class="form-control" name="TEL" placeholder="Insira o Telefone" id="fone">
					</div>
					<div class="form-group">
						<label for="">E-mail</label>
						<input type="email" class="form-control" name="EMAIL" placeholder="Insira seu E-mail">
					</div>
					<div class="form-group">
						<label for="">CEP</label>
						<input type="text" class="form-control" name="CEP" id="cep" placeholder="Insira seu CPF" >
					</div>
					<div class="form-group">
						<label for="">Foto</label>
						<input type="file" class="form-control" name="arquivo" readonly placeholder="Busque sua foto">
					</div>
					<!-- fim conteudo -->
				</div>
				<div class="modal-footer">
					<button type="reset" class="btn btn-default" data-dismiss="modal">Sair</button>
					<input type="submit" class="btn btn-success" value="Criar">
				</div>
			</div>
		</div>
	</div>
</form>
<?php $controller->registrarCliente(); ?>
<!-- FIM: modal / Registro -->

<!-- MODAL / CONSULTA -->
	<div class="modal fade" id="modal-con">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h2>Consulta Cliente</h2>
				</div>
				<div class="modal-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nome</th>
								<th>E-mail</th>
								<th>CPF</th>
							</tr>
						</thead>
						<tbody>
							<?php $controller->mostrarCliente(); ?>
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<button type="reset" class="btn btn-default" data-dismiss="modal">Sair</button>
				</div>
			</div>
		</div>
	</div>

<?php require 'footer.php'; ?>