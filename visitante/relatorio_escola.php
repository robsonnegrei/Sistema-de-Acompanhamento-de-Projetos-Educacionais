<?php
include_once '../Controller/ControladorPeriodo.php';
include_once '../Controller/ControladorEscola.php';
include_once '../Controller/ControladorAluno.php';

$idEscola = $_GET['idEscola'];

$c = new ControladorPeriodo();
$c1 = new ControladorEscola();
$c2 = new ControladorAluno();

$alunos = $c2->buscarAlunosPorEscola($idEscola);

$escola = $c1->buscarEscola($idEscola);

$qtd_presilabico_inicial = 0;
$qtd_silabico_inicial = 0;
$qtd_alf_inicial = 0;
$qtd_ort_inicial = 0;
$qtd_silabico_alf_inicial = 0;

$qtd_presilabico_1 = 0;
$qtd_silabico_1 = 0;
$qtd_alf_1 = 0;
$qtd_ort_1 = 0;
$qtd_silabico_alf_1 = 0;

$qtd_presilabico_2 = 0;
$qtd_silabico_2 = 0;
$qtd_alf_2 = 0;
$qtd_ort_2 = 0;
$qtd_silabico_alf_2 = 0;

$qtd_presilabico_3 = 0;
$qtd_silabico_3 = 0;
$qtd_alf_3 = 0;
$qtd_ort_3 = 0;
$qtd_silabico_alf_3 = 0;

$qtd_presilabico_4 = 0;
$qtd_silabico_4 = 0;
$qtd_alf_4 = 0;
$qtd_ort_4 = 0;
$qtd_silabico_alf_4 = 0;


$lista_valores_inicial = $c->getValoresDaEscolaDoPeriodo($idEscola, 0);

    foreach ($lista_valores_inicial as $valor) {
    # code...
      if($valor == 1)
          $qtd_presilabico_inicial = $qtd_presilabico_inicial + 1;
      else if($valor == 2)
          $qtd_silabico_inicial = $qtd_silabico_inicial + 1;
      else if($valor == 3)
          $qtd_silabico_alf_inicial = $qtd_silabico_alf_inicial + 1;
      else if($valor == 4)
          $qtd_alf_inicial = $qtd_alf_inicial + 1;
      else if($valor == 5)
          $qtd_ort_inicial = $qtd_ort_inicial + 1;
    
    }



$lista_valores_1 = $c->getValoresDaEscolaDoPeriodo($idEscola, 1);

    foreach ($lista_valores_1 as $valor) {
    # code...
      if($valor == 1)
          $qtd_presilabico_1 = $qtd_presilabico_1 + 1;
      else if($valor == 2)
          $qtd_silabico_1 = $qtd_silabico_1 + 1;
      else if($valor == 3)
          $qtd_silabico_alf_1 = $qtd_silabico_alf_1 + 1;
      else if($valor == 4)
          $qtd_alf_1 = $qtd_alf_1 + 1;
      else if($valor == 5)
          $qtd_ort_1 = $qtd_ort_1 + 1;
      
    }

$lista_valores_2 = $c->getValoresDaEscolaDoPeriodo($idEscola, 2);

    foreach ($lista_valores_2 as $valor) {
      # code...
      if($valor == 1)
          $qtd_presilabico_2 = $qtd_presilabico_2 + 1;
      else if($valor == 2)
          $qtd_silabico_2 = $qtd_silabico_2 + 1;
      else if($valor == 3)
          $qtd_silabico_alf_2 = $qtd_silabico_alf_2 + 1;
      else if($valor == 4)
          $qtd_alf_2 = $qtd_alf_2 + 1;
      else if($valor == 5)
          $qtd_ort_2 = $qtd_ort_2 + 1;
      
    }

$lista_valores_3 = $c->getValoresDaEscolaDoPeriodo($idEscola, 3);

    foreach ($lista_valores_3 as $valor) {
      # code...
      if($valor == 1)
          $qtd_presilabico_3 = $qtd_presilabico_3 + 1;
      else if($valor == 2)
          $qtd_silabico_3 = $qtd_silabico_3 + 1;
      else if($valor == 3)
          $qtd_silabico_alf_3 = $qtd_silabico_alf_3 + 1;
      else if($valor == 4)
          $qtd_alf_3 = $qtd_alf_3 + 1;
      else if($valor == 5)
          $qtd_ort_3 = $qtd_ort_3 + 1;
    
    }

$lista_valores_4 = $c->getValoresDaEscolaDoPeriodo($idEscola, 4);

    foreach ($lista_valores_4 as $valor) {
      # code...
      if($valor == 1)
          $qtd_presilabico_4 = $qtd_presilabico_4 + 1;
      else if($valor == 2)
          $qtd_silabico_4 = $qtd_silabico_4 + 1;
      else if($valor == 3)
          $qtd_silabico_alf_4 = $qtd_silabico_alf_4 + 1;
      else if($valor == 4)
          $qtd_alf_4 = $qtd_alf_4 + 1;
      else if($valor == 5)
          $qtd_ort_4 = $qtd_ort_4 + 1;
      
    }
$qtd_presilabico_media = ($qtd_presilabico_1+$qtd_presilabico_2+$qtd_presilabico_3+$qtd_presilabico_4)/4;
$qtd_silabico_media = ($qtd_silabico_1+$qtd_silabico_2+$qtd_silabico_3+$qtd_silabico_4)/4;
$qtd_silabico_alf_media = ($qtd_silabico_alf_1+$qtd_silabico_alf_2+$qtd_silabico_alf_3+$qtd_silabico_alf_4)/4;
$qtd_alf_media = ($qtd_alf_1+$qtd_alf_2+$qtd_alf_3+$qtd_alf_4)/4;
$qtd_ort_media = ($qtd_ort_1+$qtd_ort_2+$qtd_ort_3+$qtd_ort_4)/4;
  ?>


<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta charset="ISO-8859-1">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css.map"/>
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css.map"/>
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.css"/>
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.css.map"/>
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.min.css.map"/>
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/styles.css"/>
  </head>

  <body>
  <div class="media" STYLE="text-align: center; font-family: Tahoma">
      <p class="media-heading">Secretaria Municipal da Educa&ccedil;&atilde;o de Quixad&aacute;</p>
      <div class="media-body">
          <h4 class="media-heading">Sistema de Acompanhamento Online de Projetos Educacionais</h4>
          <h3>Relat&oacute;rio - <?php echo $c1->buscarEscola($idEscola)->nome ?></h3>
      </div>
      <div class="clearfix"></div>
      <div id="columnchart_material" style="width: 1250px; height: 500px; margin: 50px; padding: 10px; border: groove;"></div>
  </div>
          <!-- /.info-box -->
    <!--Div that will hold the pie chart-->
    
    <div class="row">
      <div class="col-lg-6">
        <div id="chart_div1"></div>        
      </div>
      <div class="col-lg-6">
        <div id="chart_div2"></div>
      </div>
      <div class="col-lg-6">
        <div id="chart_div3"></div>
      </div>
      <div class="col-lg-6">
        <div id="chart_div4"></div>
      </div>
    </div>

        <div class="row">

        <div class="col-lg-12">
        <div class="ibox float-e-margins">
        <div class="ibox-title">
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-wrench"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#">Config option 1</a>
                    </li>
                    <li><a href="#">Config option 2</a>
                    </li>
                </ul>
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Bimestre', 'Pré-Silabico', 'Silabico', 'Silábico-Alfabético','Alfabetico','Ortografico'],
                ['Diagnostico Inicial', <?php echo $qtd_presilabico_inicial;?>, <?php echo $qtd_silabico_inicial;?>, <?php echo $qtd_silabico_alf_inicial?>,<?php echo $qtd_alf_inicial?>,<?php echo $qtd_ort_inicial?>],
                ['1 Bimestre', <?php echo $qtd_presilabico_1;?>, <?php echo $qtd_silabico_1;?>, <?php echo $qtd_silabico_alf_1?>,<?php echo $qtd_alf_1?>,<?php echo $qtd_ort_1?>],
                ['2 Bimestre', <?php echo $qtd_presilabico_2;?>, <?php echo $qtd_silabico_2;?>, <?php echo $qtd_silabico_alf_2?>,<?php echo $qtd_alf_2?>,<?php echo $qtd_ort_2?>],
                ['3 Bimestre', <?php echo $qtd_presilabico_3;?>, <?php echo $qtd_silabico_3;?>, <?php echo $qtd_silabico_alf_3?>,<?php echo $qtd_alf_3?>,<?php echo $qtd_ort_3?>],
                ['4 Bimestre', <?php echo $qtd_presilabico_4;?>, <?php echo $qtd_silabico_4;?>, <?php echo $qtd_silabico_alf_4?>,<?php echo $qtd_alf_4?>,<?php echo $qtd_ort_4?>]
            ]);

            var options = {
                chart: {
                    title: 'Grafico por Bimestre',
                }
            };
            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
            chart.draw(data, options);
        }
    </script>
  </body>
</html>