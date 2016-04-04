<?php  
include_once '../0.12-rc19/src/Cezpdf.php';

include_once '../Controller/ControladorPeriodo.php';
include_once '../Controller/ControladorEscola.php';
include_once '../Controller/ControladorAluno.php';
include_once '../Controller/ControladorRegional.php';

$c = new ControladorPeriodo();
$c1 = new ControladorEscola();
$c2 = new ControladorAluno();
$cRegional = new ControladorRegional();

$pdf = new CezPDF("a4");

$pdf->selectFont('Helvetica');

$idRegional = $_GET['id_regional'];
$regional = $cRegional->getRegional($idRegional);

$escolasRegional = $c1->buscarEscolaPorRegional($idRegional);


$nivelPrimeiroPeriodo;
$nivelSegundoPeriodo;
$nivelTerceiroPeriodo;
$nivelQuartoPeriodo;

if(count($escolasRegional) > 0){
	foreach($escolasRegional as $escola ){
	    $idEscola2 = $escola->idEscola;
	    $alunos2 = $c2->buscarAlunosPorEscola($idEscola2);

	    $data = array();

	    if(count($alunos2) > 0){
			$periodo =  1;
			foreach ($alunos2 as $aluno){
				while($periodo < 5){

	                $lista_alunos_periodo = $c->getDadosAlunoPorPeriodo($periodo);
	                $flag = FALSE;
	                $nivel;
	                foreach ($lista_alunos_periodo as $lista) {
	                            # code...
	                    if($aluno->idAluno == $lista->idAluno){
	                        switch ($lista->nivel) {
	                            case 1:
	                                $nivel = 'Pré-silabico';
	                                break;
	                            case 2:
	                                $nivel = 'Silábico';
	                             	break;
	                            case 3:
	                                $nivel = 'Silábico-Alfabético';
	                                break;
	                            case 4:
	                                $nivel= 'Alfabético';
	                                break;
	                            case 5:
	                                $nivel= 'Ortográfico';
	                                break;
	                            default:
	                                # code...
	                                break;
	                        }

	                        $flag = TRUE;
	                    }

	                }

	                if(!$flag){
	                    $nivel = 'Não há dados';
	                    $flag = FALSE;
	                }
	                if($periodo == 1){
	                	$nivelPrimeiroPeriodo = $nivel;
	                }else if( $periodo == 2){
	                	$nivelSegundoPeriodo = $nivel;
	                }else if($periodo == 3){
	                	$nivelTerceiroPeriodo = $nivel;
	                }else if($periodo == 4){
	                	$nivelQuartoPeriodo = $nivel;
	                }
	                $periodo = $periodo + 1;
				}
				array_push($data, array('aluno'=>''.$aluno->nome.'',  'periodo1'=>''.$nivelPrimeiroPeriodo.'', 'periodo2'=>''.$nivelSegundoPeriodo.'','periodo3'=>''.$nivelTerceiroPeriodo.'', 'periodo4'=>''.$nivelQuartoPeriodo.''));
				$periodo = 1;
			}
			
			$pdf->ezText("<b>Regional ".$regional->nome."</b>", 20);
			$pdf->ezText("\n \n");
			$cols = array('aluno'=>'Nome', 'periodo1'=>'Periodo 1','periodo2'=>'Periodo 2','periodo3'=>'Periodo 3','periodo4'=>'Periodo 4');

			$pdf->ezTable($data, $cols);

		}
	}
	if (isset($_GET['d']) && $_GET['d']){
	   	echo $pdf->ezOutput(TRUE);
	}else{
	   	$pdf->ezStream();
	}

}else{
	$pdf->ezText("<b>Não há alunos cadastrados ou avaliados na regional ".$regional->nome, 20);
	if (isset($_GET['d']) && $_GET['d']){
		echo $pdf->ezOutput(TRUE);
	}else {
		$pdf->ezStream();
	}
}












