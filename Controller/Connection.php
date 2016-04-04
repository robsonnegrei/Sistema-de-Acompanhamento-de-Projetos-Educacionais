<?php 
	$host = "localhost";
	$usuario = "root";
	$senha = "123";
	$bd = "SME";

	$mysqli = mysql_connect($host , $usuario, $senha);
	mysql_select_db($bd,$mysqli);	
 ?>