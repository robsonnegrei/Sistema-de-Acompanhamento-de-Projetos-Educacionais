<?php 
include_once '../Controller/ControladorEscola.php';
include_once '../Controller/ControladorRegional.php';
include_once '../Controller/ControladorTurma.php';
include_once '../Controller/ControladorAluno.php';

if(!isset($_SESSION)){
    session_start();
}
if(isset($_GET['regional'])){
    $idRegional = $_GET['regional'];
    $controladorTurma = new ControladorTurma();
    $controladorAluno = new ControladorAluno();
    $controladorEscola = new ControladorEscola();

    $nome_usuario = $_SESSION['email_login'];
    if (isset($idRegional)) {
        $escolas = $controladorEscola->buscarEscolaPorRegional($idRegional);
        $quatidadeAlunos = array();
        $qtd = 0;
        if (isset($escolas)) {
            foreach ($escolas as $escola) {
                $turmas = $controladorTurma->buscarTurmasEscola($escola->idEscola);
                if (isset($turmas)) {
                    foreach ($turmas as $turma) {
                        $alunos = $controladorAluno->buscarAlunosPorTurma($turma->idTurma);
                        $qtd = $qtd + count($alunos);
                    }
                    array_push($quatidadeAlunos, $qtd);
                    $qtd = 0;
                }
            }
        }
    }
}
?>
<head>
    <title>Sape</title>
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
</head>
<body class="pace-done">
    <div class="pace  pace-inactive">
        <div data-progress="99" data-progress-text="100%" style="width: 100%;" class="pace-progress">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <div class="pace  pace-inactive">
        <div data-progress="99" data-progress-text="100%" style="width: 100%;" class="pace-progress">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <div class="pace  pace-inactive">
        <div data-progress="99" data-progress-text="100%" style="width: 100%;" class="pace-progress">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <div class="pace  pace-inactive">
        <div data-progress="99" data-progress-text="100%" style="width: 100%;" class="pace-progress">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <div>
        <a style="display: none;" id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
                 <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a id="logo" href="#" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">SAPE</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
                    <div class="topbar-main">
                        <ul class="nav navbar navbar-top-links navbar-right mbn">
                            <li>
                                <span class="hidden-xs"><?php echo $nome_usuario; ?></span><span></span></a>
                            </li>
                            <li><a href="../Controller/ControleLogin.php?acao=sair">Sair</a></li>
                        </ul>
                    </div>
            </nav>
            <!--END MODAL CONFIG PORTLET-->
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav style="min-height: 100%;" id="sidebar" role="navigation" data-step="2" data-intro="Template has <b>many navigation styles</b>" data-position="right" class="navbar-default navbar-static-side">
                <div class="sidebar-collapse menu-scroll">
                    <ul id="side-menu" class="nav">
                         <div class="clearfix"></div>
                         <li class="active"><a href="index.php?regional=<?php if(isset($idRegional)) echo $idRegional; else{ ?> # <?php }?>"> <i class="glyphicon glyphicon-book">
                            <div class="icon-bg bg-orange"></div>
                        </i><span class="menu-title">Escolas</span></a></li>
                        <li class="none"><a href="indexPost.php?id_regional=<?php if(isset($idRegional)) echo $idRegional; else{ ?> # <?php }?>">
                                <i class="glyphicon glyphicon-pencil">
                                    <div class="icon-bg bg-orange"></div>
                                </i><span class="menu-title">Post</span></a></li>
                        <li class="none"><a href="relatorio_regional.php?id_regional=<?php if(isset($idRegional)) echo $idRegional; else{ ?> # <?php }?>"><i class="glyphicon glyphicon-eye-open">
                                <div class="icon-bg bg-orange"></div>
                        </i><span class="menu-title">Gerar Relatório</span></a></li>
                    </ul>
                </div>
            </nav>
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Coordenador</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li class="active">Regional</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </di>
                <div class="page-content">
                        <div class="row mbl">
                            <div class="col-lg-12">
                                <div class="col-md-12">
                                    <div id="area-chart-spline" style="width: 100%; height: 300px; display: none; padding: 0px; position: relative;">
                                        <canvas height="300" width="992" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 992px; height: 300px;" class="flot-base"></canvas><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);" class="flot-text"><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;" class="flot-x-axis flot-x1-axis xAxis x1Axis"><div class="flot-tick-label tickLabel" style="position: absolute; top: 299px; left: 10px;">Jan</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 299px; left: 172px;">Feb</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 299px; left: 334px;">Mar</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 299px; left: 496px;">Apr</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 299px; left: 658px;">May</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 299px; left: 820px;">Jun</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 299px; left: 982px;">Jul</div></div><div style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;" class="flot-y-axis flot-y1-axis yAxis y1Axis"><div class="flot-tick-label tickLabel" style="position: absolute; top: 290px; left: 1px;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 250px; left: 1px;">25</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 210px; left: 1px;">50</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 170px; left: 1px;">75</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 130px; left: 1px;">100</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 90px; left: 1px;">125</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 50px; left: 1px;">150</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 10px; left: 1px;">175</div></div></div><canvas height="300" width="992" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 992px; height: 300px;" class="flot-overlay"></canvas><div class="legend"><div style="position: absolute; width: 0px; height: 0px; top: 15px; right: 15px; background-color: rgb(240, 242, 245); opacity: 0.85;"> </div><table style="position:absolute;top:15px;right:15px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid #ffce54;overflow:hidden"></div></div></td><td class="legendLabel">Upload</td></tr><tr><td class="legendColorBox"><div style="border:1px solid #ccc;padding:1px"><div style="width:4px;height:0;border:5px solid #01b6ad;overflow:hidden"></div></div></td><td class="legendLabel">Download</td></tr></tbody></table></div></div>
                                </div>
                            </div>
                                <!-- Regionais são listadas aqui!!!!!!!!!!!!!!-->
                            <div class="col-lg-12">
                                <div class="list-group">
                                    <a class="list-group-item active">Escolas</a>
                                    <?php
                                        if(isset($escolas)) {
                                            for ($i = 0; $i < count($escolas); $i++) {
                                            // foreach ($escolas as $escola) {
                                            ?>
                                            <a href="escola.php?idEscola=<?php echo $escolas[$i]->idEscola; ?> &idRegional=<?php echo $idRegional; ?>" class="list-group-item"><?php echo $escolas[$i]->nome . "  </br>Quantidade de alunos " .$quatidadeAlunos[$i]; ?></a>
                                    <?php
                                    }
                                } ?>
                                </div>
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
