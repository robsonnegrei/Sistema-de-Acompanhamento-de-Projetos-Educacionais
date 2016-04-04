<?php 

	if(!isset($_SESSION))
		session_start();
	
	if(isset($_SESSION['id_regional']))
		header('location:coord/index.php');
	else if(isset($_SESSION['admin']))
		header('location:admin/index.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>SAPE - SME</title>

	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/styles.css" />
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<a href="admin/template.php">Pagina</a>
	<section class="container login-form">
		<section>
			<form method="post" action="Controller/ControleLogin.php" role="login">
				<!-- <img data-holder-rendered="true" src="img/logo.jpg" style="width: 64px; height: 64px;" class="media-object" data-src="holder.js/64x64" alt="64x64"> -->
				<h1>SAPE</h1>

				<div class="form-group">
					<input type="email" name="email_login" required class="form-control" placeholder="Enter email" />
					<span class="glyphicon glyphicon-user"></span>
				</div>
				
				<div class="form-group">
					<input type="password" name="password_login" required class="form-control" placeholder="Enter password" />
					<span class="glyphicon glyphicon-lock"></span>
				</div>
				
				<button type="submit" name="go" class="btn btn-primary btn-block">Login</button>
			
			</form>

			<form method="post" action="Controller/ControleVisitante.php" role="login">
				<button type="submit" name="visitante" class="btn btn-success btn-block">Entrar como visitante</button>
				<input type="hidden" name="opcao" value="visitante">
			</form>

		</section>
	</section>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>