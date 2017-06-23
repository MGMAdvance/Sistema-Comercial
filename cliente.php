<?php
	include_once('vCPF-CNPJ.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/BST/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/BST/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="/BST/css/font-awesome.css">
    
    <script type="text/javascript" src="/BST/js/jquery-3.2.0.min.js"></script>
    <script type="text/javascript" src="/BST/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/BST/js/bootstrap-notify.min.js"></script>
    <script type="text/javascript" src="/BST/js/jquery.mask.min.js"></script>
    <script type="text/javascript">
       $(document).ready(function(){
			$('#fone').mask('(00) 00000-0000');
            $('#cep').mask('00000-000');
            $('#cpf').mask('000.000.000-00', {reverse: true});
            $('#cnpj').mask('00.000.000/0000-00', {reverse: true});
            $('#rg').mask('00.000.000-0', {reverse: true});
		})
    </script>
    
	<title></title>
	<style type="text/css">
		pre{
			background-color: black;
			font: arial;
			font-size:12;
			color:white;
		}
	</style>
    <script type="text/javascript" src="/BST/jquery.js"></script>
	<script type="text/javascript" src="/BST/js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<form action="" method="POST" role="form" enctype="multipart/form-data">
			<legend>Cliente</legend>
		
			<div class="form-group">
				<label for="">Código</label>
				<input type="text" class="form-control" name="CODIGO" placeholder="Insira o Código">
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
				<input type="file" class="form-control" name="arquivo" placeholder="Busque sua foto">
			</div>
	
			
		
			<button type="submit" name="btnEnviar" class="btn btn-danger">Enviar</button>
			<a href="cliente_con.php"><button type="button" class="btn btn-info">Consulta</button></a>
			</form>

			<br>
			<?php
        echo "<pre>";
        //Inicio upload de imagem
        
        if(isset($_POST['btnEnviar'])){
        echo "<div class='container'>";
    $foto = $_FILES['arquivo'];
	$maximo = 500000;
	$extensoes = array(".jpg",".jpeg",".gif",".png");
	$ext = strrchr($foto['name'],'.');

    if(in_array($ext, $extensoes)){

        if ($_FILES['arquivo']['size'] > $maximo) {
            print "Erro! o arquivo ultrapassa";	
            print "limite maximo de".$maximo."bytes";
        }
        else{
            move_uploaded_file($_FILES['arquivo']['tmp_name'], 'dados/fotos/foto'.$_FILES['arquivo']['name']);
        }
    
    }
    else{
        print "O arquivo enviado não é imagem";
    }
        
        //fim upload de imagem
        
			
			$origem = 'dados\cliente.txt';
			$cliente = array (date("[d/m/y - H:i:s]"),"
CODIGO: ",$_POST ['CODIGO'],"
NOME: ",$_POST['NOME'],"
CPF: ",$_POST ['CPF'],"
RG: ",$_POST ['RG'],"
TELEFONE: ",$_POST ['TEL'],"
EMAIL: ",$_POST ['EMAIL'],"
CEP: ",$_POST ['CEP'],"

");
			if($cliente[2] != ""){
			if(file_put_contents($origem, $cliente,FILE_APPEND)){
				echo "Cadastrado com sucesso";
			}else{
				echo "Erro";
			}
		}

			for ($x = 0;$x < 14; $x++)
				{
					print $cliente[$x]."<br>";

				}
        
			

			//usando if de modo "indireto" utilizando ":"
       if (validarCPF($_POST['CPF'])){ 
				echo '<b><h3><p class="text-danger">CPF ESTA INCORRETO</p></b></h3>';
        }
                else{ 
				echo '<h3><b><p class="text-success">CPF VALIDO</p></b></h3>';
                }
        }
        ?>
	});
<div></pre><br>
	</div>
    <br>

</body>
</html>