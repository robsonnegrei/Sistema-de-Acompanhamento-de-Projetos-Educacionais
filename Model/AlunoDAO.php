<?php
include_once '../Controller/Conexao.php';
include_once '../Model/Aluno.php';
class AlunoDAO{

	private $conexao;

    public function __construct($conexao){
    	try{
        	$this->conexao = $conexao;
    	}catch(Exception $e){
    		return false;
    	}
    }
	public function inserir(Aluno $aluno){

            $sql = "insert into aluno(nome_aluno, idTurma) values (?,?)";
            $a = $this->conexao->prepare($sql);
            $a->bindParam(1, $aluno->getNome());
            $a->bindParam(2, $aluno->getidTurma());
            $resultado = $a->execute();
		if (is_object(@$resultado)){
			return 1;
		}
		return -1;

	}
	public function remover(Aluno $aluno){

		$sql = "delete from aluno where idAluno = ? ";
		$a = $this->conexao->prepare($sql);

		$a->bindParam(1,$aluno->getIdAluno());

		$resultado = $a->execute();
		if(is_object($resultado)){
			return 1;
		}
		return -1;
	}
	public function getAlunosTurma(Aluno $aluno){

		$sql = "select *from aluno where idTurma = ?";
		$a = $this->conexao->prepare($sql);
		$a->bindParam(1,$aluno->getIdTurma());
		$resultado = $a->execute();
		if(is_object($resultado)) {
			$arrayalunos = array();
			while ($aluno = $a->fetchObject())
				array_push($arrayalunos, $aluno);
			return $arrayalunos;
			}
		return -1;
	}
	public function getAlunos(){

		$sql = "select * from aluno";
		$a = $this->conexao->prepare($sql);
		$resultado = $a->execute();
		if(is_object($resultado)) {
			$arrayAlunos = array();
			while ($aluno = $a->fetchObject())
				array_push($arrayAlunos, $aluno);
			return $arrayAlunos;
		  }
		return -1;
	}
	public function getAluno(Aluno $aluno){

			$sql = "select * from aluno where idAluno = ?";
			$a = $this->conexao->prepare($sql);
			$a->bindParam(1,$aluno->idAluno);
			$resultado = $a->execute();
			if(is_object($resultado)) {
				$aluno = $a->fetchObject();
				return $aluno;
			}
		return -1;
	}
	public function editarAluno(Aluno $aluno){

		$sql = "update aluno set nome_aluno = ?, idTurma = ? where idAluno= ?";

		$a = $this->conexao->prepare($sql);
		$a->bindParam(1, $aluno->getNome());
		$a->bindParam(2, $aluno->getIdTurma());
		$a->bindParam(3, $aluno->getIdAluno());

		$resultado = $a->execute();
		if(is_bool($resultado)){
			return 1;
		}
		return -1;
	}
	public function getAlunosDaEscola($idEscola){

			$sql = "select a.idAluno, a.nome_aluno, a.idTurma from aluno a, turma t where a.idTurma = t.idTurma and
 					t.idEscola = ".$idEscola." order by a.nome_aluno";
			$resultado = $this->conexao->query($sql);

			$alunos = array();

			foreach ($resultado as $valor) {
				$aluno = new Aluno();
				$aluno->idAluno = $valor['idAluno'];
				$aluno->nome = $valor['nome_aluno'];
				$aluno->idTurma = $valor['idTurma'];

				array_push($alunos, $aluno);
			}
			if(is_object($aluno)) {
				return $alunos;
			}
			return -1;

	}
	public function pesquisarAluno($nome){
		$sql = "select *from aluno where nome_aluno like '" . $nome . "' ";

		$stm = $this->conexao->prepare($sql);

		$resultado = $stm->execute();
		if (is_object($resultado)) {
			$alunos = array();
			while ($aluno = $stm->fetchObject())
				array_push($alunos, $aluno);
			return $alunos;
		}
		return -1;
	}
	//ESSA PARTE É PARA A CRIAÇÃO DO GRÁFICOS
	/*
	public function getQtdPorMesPreSilabico($periodo,$idEscola){
		$sql = "SELECT count(*) as nivelPS from aluno where nivel='ps' and periodo = '".$periodo."' and idEscola = '".$idEscola."'";
		$result = mysql_query($sql) or die ("falhou PRE"); 
		$row = mysql_fetch_assoc($result);
		$nivelPS = $row['nivelPS'];
		return $nivelPS;
	}

	public function getQtdPorMesSilabico($periodo,$idEscola){
		$sql = "SELECT count(*) as nivelS from aluno where nivel='s' and periodo = '".$periodo."' and idEscola = '".$idEscola."'";
		$result = mysql_query($sql) or die ("falhou"); 
		$row = mysql_fetch_assoc($result);
		$nivelS = $row['nivelS'];
		return $nivelS;
	}

	public function getQtdPorMesSilabicoAfalb($periodo,$idEscola){
		$sql = "SELECT count(*) as nivelSA from aluno where nivel='sa' and periodo = '".$periodo."' and idEscola = '".$idEscola."'";  
		$result = mysql_query($sql) or die ("falhou"); 
		$row = mysql_fetch_assoc($result);
		$nivelSA = $row['nivelSA'];
		return $nivelSA;
	}

	public function getQtdPorMesAfalbetico($periodo,$idEscola){
		$sql = "SELECT count(*) as nivelA from aluno where nivel='a'  and periodo = '".$periodo."' and idEscola = '".$idEscola."'"; 
		$result = mysql_query($sql) or die ("falhou"); 
		$row = mysql_fetch_assoc($result);
		$nivelA = $row['nivelA'];
		return $nivelA;
	}

	public function getQtdPorMesOrtagrafico($periodo,$idEscola){
		$sql = "SELECT count(*) as nivelO from aluno where nivel='o' and periodo = '".$periodo."' and idEscola = '".$idEscola."'"; 
		$result = mysql_query($sql) or die ("falhou"); 
		$row = mysql_fetch_assoc($result);
		$nivelO = $row['nivelO'];
		return $nivelO;
	}*/
}
?>