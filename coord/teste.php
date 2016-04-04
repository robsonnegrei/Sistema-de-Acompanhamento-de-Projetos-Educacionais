<?php
  

include_once '../Controller/ControladorPeriodo.php';
include_once '../Controller/ControladorEscola.php';



$idEscola = $_GET['idEscola'];

$c = new ControladorPeriodo();
$c1 = new ControladorEscola();

$escola = $c1->buscarEscola($idEscola);


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

  ?>


<?php
  define('MPDF_PATH', '../pdf/');
  include(MPDF_PATH.'mpdf.php');
  $mpdf=new mPDF();
  $mpdf->WriteHTML('Hello World');
  $mpdf->Output();
  exit();



?>

