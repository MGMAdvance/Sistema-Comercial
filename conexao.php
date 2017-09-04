<?php
//Conexão com o Banco(MySQL) - UsbWebServer
$con = mysql_connect("localhost:3307","root","usbw") or die ("Não foi possivel conectar ao servidor".mysql_error());
$banco = mysql_select_db("sistema",$con) or die ("Não foi possivel conectar ao banco de dados".mysql_error());

?>