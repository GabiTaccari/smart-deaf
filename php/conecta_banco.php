<?php
	$host = "localhost"; 			
	$user = "root"; 
	$pass = ""; 
	$banco = "smartdeaf";
		
	$conecta_banco = @mysqli_connect($host, $user, $pass, $banco ) 
	or die ("Problemas com a conex�o do Banco de Dados");
?>
