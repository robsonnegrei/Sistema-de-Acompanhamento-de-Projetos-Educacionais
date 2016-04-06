<?php 
	
  include("../Model/AlunoDAO.php");
  include("../Model/Aluno.php");

  $aluno = new Aluno();
  $alunoDAO = new AlunoDAO();
  if(!is_bool($alunoDAO)){
    if(isset($_POST['nomeAluno'])){
      $aluno->idEscola = $_POST['idEscola'];
      $aluno->nome = $_POST['nomeAluno'];
      if($alunoDAO->inserirAluno($aluno)== -1)
            return;
    }
  }
?>