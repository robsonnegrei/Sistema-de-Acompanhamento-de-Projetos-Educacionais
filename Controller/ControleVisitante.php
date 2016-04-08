<?php 
if(!isset($_SESSION))
	session_start();

$_SESSION['email_login'] = "Visitante";
if(isset($_POST['opcao'])){
	$opcao = $_POST['opcao'];
	if($opcao == "visitante")
		header('location:../visitante/index.php');
}