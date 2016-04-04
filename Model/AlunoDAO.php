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


	//alterado
	public function inserir(Aluno $aluno){

        try {
            $sql = "insert into aluno(nome_aluno, idTurma) values (?,?)";

            $a = $this->conexao->prepare($sql);

            $a->bindParam(1, $aluno->getNome());
            $a->bindParam(2, $aluno->getidTurma());

            return $a->execute();

        }catch (Exception $e) {
            throw new Exception();
        }
	}


	//FEITO
	public function remover(Aluno $aluno){
		try{
			$sql = "delete from aluno where idAluno = ? ";

			$a = $this->conexao->prepare($sql);

			$a->bindParam(1,$aluno->getIdAluno());

			return $a->execute();
		}catch(Exception $e){
			throw new Exception();
		}
		
	}


	public function getAlunosTurma(Aluno $aluno){
		try{
			$sql = "select *from aluno where idTurma = ?";

			$a = $this->conexao->prepare($sql);

			$a->bindParam(1,$aluno->getIdTurma());

			if(!$a->execute())
				return false;

			$arrayalunos = array();

			while($aluno = $a->fetchObject())
				array_push($arrayalunos,$aluno);

			return $arrayalunos;

		}catch(Exception $e){
			throw new Exception();
		}

	}


	//alterado
	public function getAlunos(){
		try {
            $sql = "select * from aluno";

            $a = $this->conexao->prepare($sql);

            if(!$a->execute())
                return false;

            $arrayAlunos = array();

            while ($aluno = $a->fetchObject())
                array_push($arrayAlunos, $aluno);

            return $arrayAlunos;
        }catch (Exception $e){
            throw new Exception();
        }
	}


	public function getAluno(Aluno $aluno){
		try{
			
			$sql = "select * from aluno where idAluno = ?";

			$a = $this->conexao->prepare($sql);	
			$a->bindParam(1,$aluno->idAluno);
			if(!$a->execute())
				return false;


			$aluno = $a->fetchObject();		
			
			return $aluno;

		}catch(Exception $e){
			echo errorInfo();
			throw new Exception();
		}
	}

	public function editarAluno(Aluno $aluno){

		try{
			$sql = "update aluno set nome_aluno = ?, idTurma = ? where idAluno= ?";

			$a = $this->conexao->prepare($sql);
			$a->bindParam(1,$aluno->getNome());
			$a->bindParam(2,$aluno->getIdTurma());
			$a->bindParam(3,$aluno->getIdAluno());

			return $a->execute();

		}catch(Exception $e){
			throw new Exception();
		}
	}

	public function getAlunosDaEscola($idEscola){
		try{

			$sql = "select a.idAluno, a.nome_aluno, a.idTurma from aluno a, turma t where a.idTurma = t.idTurma and t.idEscola = ".$idEscola." order by a.nome_aluno";
			$resultado = $this->conexao->query($sql);

			$alunos = array();


			foreach ($resultado as $valor) {
				# code...
				$aluno = new Aluno();
				$aluno->idAluno = $valor['idAluno'];
				$aluno->nome = $valor['nome_aluno'];
				$aluno->idTurma = $valor['idTurma'];

				array_push($alunos, $aluno);
			}

			return $alunos;

		}catch(Exception $e){
			$aluno = new $Aluno();
			$a = array();
			array_push($a, $aluno);
			return $a;
			// TODO o que ser isso? perguntar ao LUCAS
		}	
	}

	public function pesquisarAluno($nome){
		try{
			$sql = "select *from aluno where nome_aluno like '".$nome."' ";

			$stm = $this->conexao->prepare($sql);

			if(!$stm->execute())
				return false;
			
			//$stm->bindParam(1,$nome);

			$alunos = array();

			while($aluno = $stm->fetchObject())
				array_push($alunos, $aluno);
			
			return $alunos;
		}catch(Exception $e){
			throw new Exception();
		}
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