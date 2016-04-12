<?php
include_once '../Controller/ControladorRegional.php';
include_once '../Controller/ControladorUsuario.php';
include_once '../Controller/ControladorEscola.php';
include_once '../Model/Regional.php';
if(!isset($_SESSION)){
    session_start();
}
if(isset($_GET['id_regional_selec'])) {
    $id_regional = $_GET['id_regional_selec'];
}   
    $controladorRegional = new ControladorRegional();
    $controladorUsuario = new ControladorUsuario();
    $regionais = $controladorRegional->buscarTodasRegionais();
    $coordenadoresReg = $controladorUsuario->buscarAllUsuario();



$regional =  new Regional();
if(isset($id_regional)){
    foreach ($regionais as $valor) {
        if(strcmp($valor->idRegional,$id_regional)){
            $regional->idRegional = $id_regional;
            $regional->nome = $valor->nome;
        }
    }
}

$controladorEscola = new ControladorEscola();
$escolas = $controladorEscola->buscarEscolaPorRegional($regional->idRegional);
$coordenadores = array();

foreach ($coordenadoresReg as $coord){
    if( strcmp($coord->idRegional,  $regional->idRegional )){
        array_push($coordenadores, $coord);
    }
}
?>
<head>
    <title>SAPE</title>
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
<body class="      pace-done"><div class="pace  pace-inactive"><div data-progress="99" data-progress-text="100%" style="width: 100%;" class="pace-progress">
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
                    <span class="hidden-xs"><?php echo $_SESSION['email_login']; ?></span><span></span></a>
                    
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
                    </i><span class="menu-title">Regionais</span></a></li>
                    
                </ul>
            </div>
        </nav>
          
          
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Visão Geral - Administrador</div>
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
                    
                    <h1>Regional <?php echo $regional->nome;?></h1>
                    <!-- Mostrando Coordenadores -->

                    <?php
                    if(count($coordenadores) > 0){  ?>
                        <h2>Coornedadores</h2>
                        <table class="table" style="background: #FFF;">
                            <thead>
                            <tr>
                                <th>Login</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($coordenadores as $cdd) { ?>
                                <tr>
                                    <td><?php echo $cdd->email; ?></td>
                                    <td><button  onclick="window.location.href='editar-coord.php?id=<?php echo $cdd->id; ?>'" class="btn btn-warning">Editar</button></td>
                                    <td><button  onclick="window.location.href='../Controller/ControladorUsuario.php?acao=excluir&id=<?php echo $cdd->id;?>'" class="btn btn-danger">Excluir</button></td>
                                </tr>  <?php
                            } ?>
                            </tbody>
                        </table>
                        <?php
                    }else{
                        echo "<h3>Nenhum Coordenador</h3>";
                    }
                    ?>
                    <button onclick="window.location.href='cadastro-usuario.php?idRegional=<?php echo $regional->idRegional;?>'" class="btn btn-primary">Cadastrar Coordenador</button>
                    <?php 

                        if(count($escolas) > 0){
                    ?>
                    <h2>Escolas</h2>
                    
                    <table class="table" style="background: #FFF;">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($escolas as $escola) {
                            # code...
                        ?>
                          <tr>
                            <td><?php echo $escola->nome; ?></td>
                          </tr>
                        <?php 
                        }
                        ?>
                        </tbody>
                      </table>

                      <?php 
                        }else{
                            echo "<h3>Nenhuma Escola Cadastrada</h3>";
                        }
                      ?>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <a href="http://themifycloud.com">2014 © KAdmin Responsive Multi-Purpose Template</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
</body>