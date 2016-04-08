<?php 
include_once '../Controller/ControladorEscola.php';
include_once '../Controller/ControladorAluno.php';
include_once '../Model/Turma.php';
include_once '../Controller/ControladorTurma.php';

if(!isset($_SESSION)){
    session_start();
}
if(isset($_GET['idEscola'])) {
    $idEscola = $_GET['idEscola'];
    $controladorAluno = new ControladorAluno();
    $controladorEscola = new ControladorEscola();
    $controladorTurma = new ControladorTurma();
    
    $escola = $controladorEscola->buscarEscola($idEscola);
    $turmas = $controladorTurma->buscarTurmasEscola($idEscola);
}
$nome_usuario = $_SESSION['email_login'];
?>
<head>
    <title>Sare - Administrador</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="../styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../styles/main.css">
<style type="text/css" id="holderjs-style"></style></head>
<body class="        pace-done"><div class="pace  pace-inactive"><div data-progress="99" data-progress-text="100%" style="width: 100%;" class="pace-progress">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div><div class="pace  pace-inactive"><div data-progress="99" data-progress-text="100%" style="width: 100%;" class="pace-progress">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div><div class="pace  pace-inactive"><div data-progress="99" data-progress-text="100%" style="width: 100%;" class="pace-progress">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div><div class="pace  pace-inactive"><div data-progress="99" data-progress-text="100%" style="width: 100%;" class="pace-progress">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    <div>
        <!--BEGIN THEME SETTING-->
        
        <!--END THEME SETTING-->
        <!--BEGIN BACK TO TOP-->
        <a style="display: none;" id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="index.php" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">SAPE</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main">
                
                
                
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    
                     <span class="hidden-xs"><?php echo $nome_usuario; ?></span><span></span></a>
                    
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="../Controller/ControleLogin.php?acao=sair" class="dropdown-toggle"><span class="hidden-xs">Sair</span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="#"><i class="fa fa-calendar"></i>My Calendar</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i>My Inbox<span class="badge badge-danger">3</span></a></li>
                            <li><a href="#"><i class="fa fa-tasks"></i>My Tasks<span class="badge badge-success">7</span></a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-lock"></i>Lock Screen</a></li>
                            <li><a href="Login.html"><i class="fa fa-key"></i>Log Out</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </nav>
            <!--BEGIN MODAL CONFIG PORTLET-->
            <div id="modal-config" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">
                                ×</button>
                            <h4 class="modal-title">
                                Modal title</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend et nisl eget
                                porta. Curabitur elementum sem molestie nisl varius, eget tempus odio molestie.
                                Nunc vehicula sem arcu, eu pulvinar neque cursus ac. Aliquam ultricies lobortis
                                magna et aliquam. Vestibulum egestas eu urna sed ultricies. Nullam pulvinar dolor
                                vitae quam dictum condimentum. Integer a sodales elit, eu pulvinar leo. Nunc nec
                                aliquam nisi, a mollis neque. Ut vel felis quis tellus hendrerit placerat. Vivamus
                                vel nisl non magna feugiat dignissim sed ut nibh. Nulla elementum, est a pretium
                                hendrerit, arcu risus luctus augue, mattis aliquet orci ligula eget massa. Sed ut
                                ultricies felis.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-default">
                                Close</button>
                            <button type="button" class="btn btn-primary">
                                Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--END MODAL CONFIG PORTLET-->
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav style="min-height: 100%;" id="sidebar" role="navigation" data-step="2" data-intro="Template has <b>many navigation styles</b>" data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    
                     <div class="clearfix"></div>
                    <li class="active"><a href="index.php"><i class="glyphicon glyphicon-book">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Escolas</span></a></li>
                    <li class="none"><a href="indexPost.php"><i class="glyphicon glyphicon-pencil">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Post</span></a></li>
     
                    
                </ul>
            </div>
        </nav>
          
          
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Visao Geral </div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        
                        
                        <li class="active">Regionais</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                        <div class="row mbl">
                            <h1>Escola <?php
                                if(isset($escola)){ echo $escola->nome; } ?> : Turmas</h1>
                            <div class="col-lg-12">
                                <div class="row">
                                 <div class="col-lg-6">
                                    <ul class="list-group">
                                    <?php
                                        if(!empty($turmas)){ 
                                            
                                            foreach ($turmas as $turma) {
                                    ?>
                                            <li>
                                             <?php if(isset($turma)) {?>
                                                 <a href="turma.php?idTurma=<?php echo $turma->idTurma;?>&idEscola=<?php echo $idEscola;?>" class="list-group-item">
                                                     <?php echo $turma->nome_turma; ?>
                                                </a><button onclick="window.location.href='../Controller/ControladorTurma.php?acao=excluir&idTurma=<?php echo $turma->idTurma?>&idEscola=<?php echo $idEscola?>'" type="button" class="btn btn-danger">Excluir</button>
                                             <?php } ?>
                                            </li>

                                    <?php 
                                            }
                                        }else{
                                            echo "<a class='list-group-item'>Não há Turmas</a>";
                                        }
                                    ?>
                                    </ul>
                                </div>
                                </div>
                            
                              <?php if(isset($idEscola)){ ?> <button onclick="window.location.href='cadastro-turma.php?idEscola=<?php echo $idEscola;?>
                              '" type="button" class="btn btn-danger">Adicionar Turma</button>
                              <?php }?>
                            </div>
                            
                        </div>
                    
<?php if (isset($idEscola)){ ?> <button onclick="window.location.href='avaliar-alunos.php?idEscola=<?php echo $idEscola;?>'" type="button" class="btn btn-primary">Avaliar Alunos da Escola</button>
<button onclick="window.location.href='relatorio.php?idEscola=<?php echo $idEscola;?>'" type="button" class="btn btn-warning">Gerar Relatório Escolar</button>
<?php } ?>

</div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <a href="http://themifycloud.com">SME - Secretaria Municipal da Educação de Quixadá</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
</body>