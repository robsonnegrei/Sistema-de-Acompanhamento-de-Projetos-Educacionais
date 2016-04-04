<?php 
	include_once '/var/www/html/SistemaSME/Model/AlunoDAO.php';
	include_once '/var/www/html/SistemaSME/Model/Aluno.php';


	$aluno = new Aluno();
	
	$idAluno = $id = $_GET['cod'];
	$idEscola = $_GET['idEscola'];

	$alunoDAO = new AlunoDAO();
	if(!is_bool($alunoDAO))
		$alunoDAO->removerAluno($idAluno);


	header("Location: http://localhost/SistemaSME/View/ListaAlunosEscolaNew.php?idEscola=$idEscola");

?>