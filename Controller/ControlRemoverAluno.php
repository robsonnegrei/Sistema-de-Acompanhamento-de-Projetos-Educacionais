<?php 
	include_once '../Model/AlunoDAO.php';
	include_once '../Model/Aluno.php';
	$aluno = new Aluno();
	$idAluno = $id = $_GET['cod'];
	$idEscola = $_GET['idEscola'];
	$alunoDAO = new AlunoDAO();
	if(($alunoDAO) != -1)
		$alunoDAO->removerAluno($idAluno);
	header("Location:../View/ListaAlunosEscolaNew.php?idEscola=$idEscola");

?>