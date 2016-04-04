<?php 
	
  include("/var/www/html/SistemaSME/Model/AlunoDAO.php");
  include("/var/www/html/SistemaSME/Model/Aluno.php");

  $aluno = new Aluno();
  $alunoDAO = new AlunoDAO();
  if(!is_bool($alunoDAO)){
    if(isset($_POST['nomeAluno'])){
      $aluno->idEscola = $_POST['idEscola'];
      $aluno->nome = $_POST['nomeAluno'];
      try {
        $alunoDAO->inserirAluno($aluno);
      }catch (Exception $e){
        throw $e;
      }
    }
  }
?>