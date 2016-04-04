<?php 
include_once '../Controller/ControladorEscola.php';
include_once '../Model/Turma.php';
include_once '../Controller/ControladorPeriodo.php';
include_once '../Controller/ControladorAluno.php';

$idRegional = $_GET['id_regional'];
$idAluno = $_GET['idAluno'];
$controladorAluno = new ControladorAluno();
$controladorPeriodo = new ControladorPeriodo();

$aluno = $controladorAluno->buscarAluno($idAluno);

$nivelPeriodoInicial = $controladorPeriodo->getNivelAlunoPeriodo(0,$idAluno);
$nivelPrimeiroPeriodo = $controladorPeriodo->getNivelAlunoPeriodo(1,$idAluno);
$nivelSegundoPeriodo = $controladorPeriodo->getNivelAlunoPeriodo(2,$idAluno);
$nivelTerceiroPeriodo = $controladorPeriodo->getNivelAlunoPeriodo(3,$idAluno);
$nivelQuartoPeriodo = $controladorPeriodo->getNivelAlunoPeriodo(4,$idAluno);


$nivel_inicial_1 = 0;
$nivel_inicial_2 = 0;
$nivel_inicial_3 = 0;
$nivel_inicial_4 = 0;
$nivel_inicial_5 = 0;

if($nivelPeriodoInicial != null){
    switch ($nivelPeriodoInicial->nivel){
        case 1:
            $nivel_inicial_1 = 1;
            break;
        case 2:
            $nivel_inicial_2 = 2;
            break;
        case 3:
            $nivel_inicial_3 = 3;
            break;
        case 4:
            $nivel_inicial_4 = 4;
            break;
        case 5:
            $nivel_inicial_5 = 5;
            break;
        default:
            
            break;
    }
}


$nivel_primeiro_1 = 0;
$nivel_primeiro_2 = 0;
$nivel_primeiro_3 = 0;
$nivel_primeiro_4 = 0;
$nivel_primeiro_5 = 0;

if($nivelPrimeiroPeriodo != null){
    switch ($nivelPrimeiroPeriodo->nivel){
        case 1:
            $nivel_primeiro_1 = 1;
            break;
        case 2:
            $nivel_primeiro_2 = 2;
            break;
        case 3:
            $nivel_primeiro_3 = 3;
            break;
        case 4:
            $nivel_primeiro_4 = 4;
            break;
        case 5:
            $nivel_primeiro_5 = 5;
            break;
        default:
            
            break;
    }
}
$nivel_segundo_1=0;
$nivel_segundo_2=0;
$nivel_segundo_3=0;
$nivel_segundo_4=0;
$nivel_segundo_5 = 0;
if($nivelSegundoPeriodo != null){
   switch ($nivelSegundoPeriodo->nivel) {
        case 1:
            $nivel_segundo_1 = 1;
            break;
        case 2:
            $nivel_segundo_2 = 2;
            break;
        case 3:
            $nivel_segundo_3 = 3;
            break;
        case 4:
            $nivel_segundo_4 = 4;
            break;
        case 4:
            $nivel_segundo_5 = 5;
            break;
        default:
            
            break;
} 
}
$nivel_terceiro_1=0;
$nivel_terceiro_2=0;
$nivel_terceiro_3=0;
$nivel_terceiro_4=0;
$nivel_terceiro_5=0;
if($nivelTerceiroPeriodo != null){
    switch ($nivelTerceiroPeriodo->nivel) {
        case 1:
            $nivel_terceiro_1=1;
            break;
        case 2:
            $nivel_terceiro_2=2;
            break;
        case 3:
            $nivel_terceiro_3=3;
            break;
        case 4:
            $nivel_terceiro_4=4;
            break;
        case 5:
            $nivel_terceiro_5=5;
            break;
        default:
            
        break;
    }
}

$nivel_quarto_1 = 0;
$nivel_quarto_2 = 0;
$nivel_quarto_3 = 0;
$nivel_quarto_4 = 0;
$nivel_quarto_5 = 0;
if($nivelQuartoPeriodo != null){
    switch ($nivelQuartoPeriodo->nivel) {
        case 1:
            $nivel_quarto_1 = 1;
            break;
        case 2:
            $nivel_quarto_2 = 2;
            break;
        case 3:
            $nivel_quarto_3 = 3;
            break;
        case 4:
            $nivel_quarto_4 = 4;
            break;
        case 5:
            $nivel_quarto_5 = 5;
            break;
        default:
            
            break;
    }
}
?>



<head>
    <title>Sape - Visitante</title>

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
                <a id="logo" href="index.php" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">SAPE</span><span style="display: none" class="logo-text-icon"></span></a></div>
            <div class="topbar-main">
                
                
                
                <ul class="nav navbar navbar-top-links navbar-right mbn">

                    
                     <span class="hidden-xs">Visitante></span><span></span></a>
                    
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
                    </i><span class="menu-title">Alunos</span></a></li>

                    <li class="none"><a href="pesquisar_alunos.php?id_regional=<?php echo $idRegional;?>"><i class="glyphicon glyphicon-search">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Pesquisar</span></a></li>

                      <li class="none"><a href="relatorio_regional.php?id_regional=<?php echo $idRegional;?>"><i class="glyphicon glyphicon-book">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Gerar Relatorio</span></a></li>
     
                    
                </ul>
            </div>
        </nav>
          
          
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Visitante</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        
                        
                        <li class="active">Aluno</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">


                  <div class="col-lg-12">
                        <div class="list-group">
                            <a class="list-group-item active">Aluno</a>

                            <!--  <?php 
                                if(isset($aluno)){
                                      ?>

                                      <table border="1" class="table table-striped">
                                      <thead>
                                        <tr>
                                          <th>Primeiro Nome</th>
                                          <th>Nivel</th>
                                          <th>Periodo</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                    
                                    <?php

                                            for($i = 0; $i < 4 ; $i++) {
                                                $dados = $controladorPeriodo->getNivelAlunoPeriodo($i + 1,$aluno->idAluno);
                                        ?>
                                            <tr>
                                                <td><?php echo $aluno->nome_aluno;?></td>
                                            
                                                <td><?php 
                                                if(!empty($dados->nivel)){
                                                    switch ($dados->nivel) {
                                                        case 1:
                                                            echo "Pre-Silabico";
                                                            break;
                                                        case 2:
                                                            echo "Silábico";
                                                            break;
                                                        case 3:
                                                            echo "Silábico Alfabético";
                                                            break;
                                                        case 4:
                                                            echo "Alfabético";
                                                            break;
                                                        case 5:
                                                            echo "Ortográfico";
                                                            break;
                                                        default:
                                                            # code...
                                                            break;
                                                    }
                                                }else{
                                                    echo "Não há dados";
                                                }
                                                

                                                ?></td>
                                                <td><?php echo $i+1;?></td>
                                            </tr>
                                    
                                        <?php 
                                            }
                                        }else{
                                            echo "<h3>Nenhum Aluno Cadastrado</h3>";
                                        }
                                        ?>    
                                        
                                        

                                      </tbody>
                                    </table>

                            -->

                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script type="text/javascript">
                              google.charts.load('current', {'packages':['bar']});
                              google.charts.setOnLoadCallback(drawChart);
                              function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                  ['2016', 'Pre-Silabico', 'Silabico', 'Silabico Alfabético','Alfabético','Ortográfico'],
                                  ['Diagnostico Inicial', <?php echo $nivel_inicial_1;?>, <?php echo $nivel_inicial_2;?>, <?php echo $nivel_inicial_3;?>,<?php echo $nivel_inicial_4;?>,<?php echo $nivel_inicial_5;?>],
                                  ['1 Bimestre', <?php echo $nivel_primeiro_1;?>, <?php echo $nivel_primeiro_2;?>, <?php echo $nivel_primeiro_3;?>,<?php echo $nivel_primeiro_4;?>,<?php echo $nivel_primeiro_5;?>],
                                  ['2 Bimestre', <?php echo $nivel_segundo_1;?>, <?php echo $nivel_segundo_2;?>, <?php echo $nivel_segundo_3;?>,<?php echo $nivel_segundo_4;?>,<?php echo $nivel_segundo_5;?>],
                                  ['3 Bimestre', <?php echo $nivel_terceiro_1;?>, <?php echo $nivel_terceiro_2;?>, <?php echo $nivel_terceiro_3;?>,<?php echo $nivel_terceiro_4;?>,<?php echo $nivel_terceiro_5;?>],
                                  ['4 Bimestre', <?php echo $nivel_quarto_1;?>,<?php echo $nivel_quarto_2;?>, <?php echo $nivel_quarto_3;?>, <?php echo $nivel_quarto_4;?>,<?php echo $nivel_quarto_5   ;?>]
                                ]);

                                var options = {
                                  chart: {
                                    title: '<?php echo $aluno->nome_aluno;?>',
                                    subtitle: 'Nivel por bimestre',
                                  }
                                };

                                var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                                chart.draw(data, options);
                              }
                            </script>
                          </head>
                          <body>
                            <div id="columnchart_material" style="width: 982px; height: 500px;"></div>
                          </body>





                        </div>
                    </div>

    

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