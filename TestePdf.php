<?php  

include_once '0.12-rc19/src/Cezpdf.php';

$pdf = new CezPDF("a4");

$pdf->selectFont('Helvetica');

$data = array();
for($i = 0; $i < 4; $i++){
	array_push($data, array('nome'=>'Lucas',  'perido1'=>'Ortografico', 'perido2'=>'wizard','perido3'=>''.$i.'', 'perido4'=>''.$i.''));
}

// $data = array(
//  array('nome'=>'Lucas',  'perido1'=>'Ortografico', 'perido2'=>'wizard',         'perido3'=>'asasaas',                                 'perido4'=>'asasaas')
// ,array('nome'=>'Robson', 'perido1'=>'Ortografico', 'perido2'=>'hobbit',         'perido3'=>'http://www.ros.co.nz/pdf/',               'perido4'=>'asasaas')
// ,array('nome'=>'GG',     'perido1'=>'Silabico',    'perido2'=>'hobbit',         'perido3'=>'sadasdasd',                               'perido4'=>'asasaas')
// ,array('nome'=>'Matheus','perido1'=>'Silabico',    'perido2'=>'bad dude',       'perido3'=>'http://sourceforge.net/projects/pdf-php', 'perido4'=>'asasaas')
// ,array('nome'=>'Debora', 'perido1'=>'pre-silabico','perido2'=>'really bad dude','perido3'=>'sfgsdfgsdfgdsf',                          'perido4'=>'asasaas')
// );


$cols = array('nome'=>'Nome', 'perido1'=>'Periodo 1','perido2'=>'Periodo 2','perido3'=>'Periodo 3','perido4'=>'Periodo 4');
$coloptions = array('nome'=> array('justification'=>'right'), 'perido1'=> array('justification'=>'left'),'periodo3'=> array('justification'=>'right'));

$pdf->ezText("<b>Teste PDF RELATORIO</b>", 12);


//com linhas
$pdf->ezTable($data, $cols);
$pdf->ezTable($data, $cols);
//sem linhas
//$pdf->ezTable($data, $cols, '', array('showHeadings'=>0,'shaded'=>0,'showLines'=>0));

if (isset($_GET['d']) && $_GET['d']){
  echo $pdf->ezOutput(TRUE);
} else {
  $pdf->ezStream();
}






