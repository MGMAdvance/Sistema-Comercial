<?php
   require 'vendor/autoload.php';
   $controller = new App\Mvc\Controller();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="BST/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="BST/css/font-awesome.css">
	<title></title>
</head>
<body>
	<nav class="navbar navbar-inverse" style="border-radius: 0px;">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">
	        <img alt="Inicio" src="">
	      </a>
	    </div>
	    <ul class="nav navbar-nav">
			<li><a href="cliente.php">
			<span class="glyphicon glyphicon-user"></span> Clientes</a></li>
			<li><a href="cliente.php">
			<span class="glyphicon glyphicon-user"></span> Funcionario</a></li>
			<li><a href="cliente.php">
			<span class="glyphicon glyphicon-user"></span> Fornecedor</a></li>
			<li><a href="cliente.php">
			<span class="glyphicon glyphicon-user"></span> Produto</a></li>
		</ul>
	    <div></div>
	  </div>
	</nav>
	