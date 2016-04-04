<?php  
include_once('../Model/UsuarioDAO.php');
include_once('ControladorUsuario.php');

if(!isset($_SESSION))
	session_start();

$usuarioDAO = new UsuarioDAO();

if(isset($_POST['acao'])){
	$acao = $_POST['acao'];
	if($acao == "sair"){
		session_destroy();
		header('location: /index.php');
	}
}else if(isset($_GET['acao'])){
	$acao = $_GET['acao'];
	if($acao == "sair"){
		session_destroy();
		header('location: /index.php');
	}
}

$login = $_POST['email_login'];
$senha = $_POST['password_login'];

if(!is_bool($usuarioDAO)) {
	$bool1 = $usuarioDAO->usuarioExiste($login, $senha);
	$bool2 = $usuarioDAO->isAdmin($login, $senha);
}


if(isset($bool1) && $bool1){
	$_SESSION['email_login'] = $login;
	$_SESSION['password_senha'] = $senha;
	//$idRegional = 1;
	try {
		$controlador = new ControladorUsuario();
		$lista = $controlador->buscarAllUsuario();
		if(isset($lista)){
			foreach ($lista as $user) {
				if ($user->email == $login){
					$idRegional = $user->idRegional;
					echo $idRegional;
					header('location:../coord/index.php?regional='.$idRegional);
				}
			}
		}
	}catch (Exception $e){
		//header('location:../index.php');
	}
	
} else if(isset($bool2) && $bool2){
	$_SESSION['admin'] = "admin";
	$_SESSION['email_login'] = $login;
	$_SESSION['password_senha'] = $senha;

	header('location:../admin/index.php');

} else{
	unset ($_SESSION['email_login']); 
	unset ($_SESSION['password_senha']); 
	header('location:../index.php'); 
}


