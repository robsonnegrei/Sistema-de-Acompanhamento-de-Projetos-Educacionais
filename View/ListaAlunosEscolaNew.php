<?php 
  session_start();   
  
  include_once ('/var/www/html/SistemaSME/Model/EscolaDAO.php');
  include_once ('/var/www/html/SistemaSME/Model/UsuarioDAO.php');
  include_once ('/var/www/html/SistemaSME/Model/Usuario.php');
  include_once ('/var/www/html/SistemaSME/Model/AlunoDAO.php');
  include_once ('/var/www/html/SistemaSME/Model/Aluno.php');

  $usuarioDAO = new UsuarioDAO();
  $usuario = new Usuario();
  $escolaDAO = new EscolaDAO();
  $alunoDAO = new AlunoDAO();

  $usuario = $usuarioDAO->getUsuario($_SESSION['email_login']);
  $escolas = $escolaDAO->getEscolas($usuario->idRegional);

  $idEscola = $_GET['idEscola'];

  $arrayAlunos = $alunoDAO->getAlunosEscola($idEscola);

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <?php 
      
      if((!isset ($_SESSION['email_login']) == true) and (!isset ($_SESSION['password_login']) == true)) { 
        unset($_SESSION['email_login']); 
        unset($_SESSION['password_senha']); 
        header('location:/SistemaSME/View/index.php'); 
      } 
      $logado = $_SESSION['email_login'];

    ?> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Home</title>
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="theme.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <link rel="stylesheet" type="text/css" href="meuCss.css">
  </head>

  <body role="document">

    <nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/SistemaSME/View/Pagina2.php">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Escolas <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
            <?php  
              foreach($escolas as $esco){
                echo "<li> <a href='/SistemaSME/View/ListaAlunosEscolaNew.php?idEscola=$esco->idEscola'>".$esco->nome.'</a></li>';  
              }
            ?>
          </ul>
        </li>          
        <?php  
          echo "<li ><a href='/SistemaSME/View/formAluno.php?idEscola=$idEscola'>Cadastrar Aluno<span style='font-size:16px;' class='pull-right hidden-xs showopacity glyphicon glyphicon-plus-sign'></span></a></li>";
        ?>     
        <li ><a href="#">Sair<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

 <div class="container theme-showcase" role="main">



      <div class="page-header">
        <h1>Nome dos Alunos da Escola</h1> 
      </div>
      <div class="row">
        <div class="col-md-11 col-md-10 ">
          <table class="table">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Opções</th>
              </tr>
            </thead>
            <tbody>
              <?php 
            
                foreach($arrayAlunos as $aluno){
                  echo'<tr>';
                  echo '<td>'.$aluno->nome.'</td>';
                  echo '<td> idade </td>';
                  /*echo '<td>'.$aluno->nivel.'</td>';
                  switch ($aluno->periodo){
                    case 0:
                      echo '<td>1 Periodo</td>';
                      break;
                    case 1:
                      echo '<td>2 Periodo</td>';
                      break;
                    case 2:
                      echo '<td>3 Periodo</td>';
                      break;
                    case 3:
                      echo '<td>4 Periodo</td>';
                      break;
                    default:
                      echo '<td>NULL</td>';
                      break;*/
                  
                  
                  echo "<td><Button class='btn btn-warning' name='idAlunoEditar' value=".$aluno->idAluno." > 
                        <a href='/SistemaSME/View/EditAluno.php?idAluno=$aluno->idAluno & idEscola=$idEscola' style='text-decoration:none'>Editar</a> </Button>
                            <Button class='btn btn-danger' name='idAlunoRemover' value=".$aluno->idAluno." > 
                            <a href='/SistemaSME/Controller/ControlRemoverAluno.php?cod=$aluno->idAluno & idEscola=$idEscola' style='text-decoration:none' >Remover</a> </Button></td>";
                  
                  echo'</tr>';

                }
              
              ?>
                      <?php  
          echo "<td><button class='btn btn-primary'><a href='formAluno.php?idEscola=$idEscola' style='text-decoration:none'>Add Alunos</a></button></td>";
          echo "<td><button class='btn btn-primary'><a href='AdicionaNivel.php?idEscola=$idEscola' style='text-decoration:none'>Add Nivel</a></button></td>";
        ?>
            </tbody>
          </table>
        </div>
    </div>
  </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>
