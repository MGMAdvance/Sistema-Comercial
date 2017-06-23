<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/BST/css/bootstrap.css">
		<title>Sistema Comercial</title>
		<style type="text/css">
			.sem-borda{
				border-radius: 0px;
				}
			nav{
				position: fixed;
			}
		</style>
	</head>

	<body>
		
		<nav class="navbar navbar-inverse sem-borda" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<a class="navbar-brand" href="prin.php" target="rush">Sistema</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="backup.php" target="rush"><span class="glyphicon glyphicon-hdd"></span> Backup</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Login</a></li>
				</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

		<iframe  style="width: 100%; height: 100%;max-height: 100%;max-width: 100%;position: fixed;" frameborder="0" name="rush" src="prin.php" >Este navegador não é compativel</iframe>

		<script type="text/javascript" src="/BST/jquery.js"></script>
		<script type="text/javascript" src="/BST/js/bootstrap.js"></script>
	</body>
</html>