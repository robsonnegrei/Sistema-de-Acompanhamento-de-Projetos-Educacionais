<?php  
	include_once '../Model/AlunoDAO.php';
	include_once '../Model/Aluno.php';

	$aluno = new Aluno();
	$alunoDAO = new AlunoDAO();
	if(is_bool($alunoDAO))
		header("Location: http://localhost/SistemaSME/View/ListaAlunosEscolaNew.php?idEscola=$aluno->idEscola");
	$idAluno = $_GET['idAluno'];
	$aluno = $alunoDAO->getAluno($idAluno);
	if(isset($_POST['idAluno'])){
		$idAluno = $_POST['idAluno'];
    	$aluno->nome = $_POST['nomeAluno'];
		$alunoDAO->editarAluno($aluno, $idAluno);
		if(is_object($aluno))
			header("Location: http://localhost/SistemaSME/View/ListaAlunosEscolaNew.php?idEscola=$aluno->idEscola");
	}
?>