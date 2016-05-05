<?php
include_once '../Controller/Conexao.php';
include_once '../Model/Aluno.php';
class AlunoDAO{

	private $conexao;

    public function __construct($conexao){
        	$this->conexao = $conexao;

    }
	public function inserir(Aluno $aluno){

            $sql = "insert into aluno(nome_aluno, idTurma) values (?,?)";
            $a = $this->conexao;
			if($a != null) {
				$a = $a->prepare($sql);
				$a->bindParam(1, $aluno->getNome());
				$a->bindParam(2, $aluno->getidTurma());
				$resultado = $a->execute();
				if (is_object(@$resultado)) {
					return 1;
				}
			}
		return -1;

	}
	public function remover(Aluno $aluno){

		$sql = "delete from aluno where idAluno = ? ";
		$a = $this->conexao;
		if($a != null) {
			$a = $a->prepare($sql);
			$a->bindParam(1, $aluno->idAluno);

			$resultado = $a->execute();
			if (is_object($resultado)) {
				return 1;
			}
		}
		return -1;
	}
	public function getAlunosTurma(Aluno $aluno){

		$sql = "select * from aluno where idTurma = ?";
		$a = $this->conexao;
		if($a != null ) {
			$a = $a->prepare($sql);
			$a->bindParam(1, $aluno->idTurma);
			$resultado = $a->execute();
			if (!empty($resultado)) {
				$arrayalunos = array();
				while ($aluno = $a->fetchObject())
					array_push($arrayalunos, $aluno);
				return $arrayalunos;
			}
		}
		return -1;
	}
	public function getAlunos(){

		$sql = "select * from aluno";
		$a = $this->conexao;
		if(!is_bool($a)) {
			$a = $a->prepare($sql);
			$resultado = $a->execute();
			if (is_object($resultado)) {
				$arrayAlunos = array();
				while ($aluno = $a->fetchObject())
					array_push($arrayAlunos, $aluno);
				return $arrayAlunos;
			}
		}
		return -1;
	}
	public function getAluno(Aluno $aluno){

			$sql = "select * from aluno where idAluno = ?";
			$a = $this->conexao;
			if($a != null) {
				$a = $a->prepare($sql);
				$a->bindParam(1, $aluno->idAluno);
				$resultado = $a->execute();
				if (is_object($resultado)) {
					$aluno = $a->fetchObject();
					return $aluno;
				}
			}
			return -1;
	}
	public function editarAluno(Aluno $aluno){

		$sql = "update aluno set nome_aluno = ?, idTurma = ? where idAluno= ?";

		$a = $this->conexao;
		if(!is_bool($a)) {
			$a = $a->prepare($sql);
			$a->bindParam(1, $aluno->nome);
			$a->bindParam(2, $aluno->idTurma);
			$a->bindParam(3, $aluno->idAluno);

			$resultado = $a->execute();
			if (is_bool($resultado)) {
				return 1;
			}
		}
		return -1;
	}
	public function getAlunosDaEscola($idEscola){

			$sql = "select a.idAluno, a.nome_aluno, a.idTurma from aluno a, turma t where a.idTurma = t.idTurma and
 					t.idEscola = ".$idEscola." order by a.nome_aluno";
			$resultado = $this->conexao;
			if(!is_bool($resultado)) {
				$resultado = $resultado->query($sql);

				$alunos = array();

				foreach ($resultado as $valor) {
					$aluno = new Aluno();
					$aluno->idAluno = $valor['idAluno'];
					$aluno->nome = $valor['nome_aluno'];
					$aluno->idTurma = $valor['idTurma'];

					array_push($alunos, $aluno);
				}
				if (!empty($alunos)) {
					return $alunos;
				}
			}
			return -1;

	}
	public function pesquisarAluno($nome){
		$sql = "select *from aluno where nome_aluno like ? ";
		if($this->conexao != null) {
			$stm = $this->conexao->prepare($sql);
			$stm->bindParam(1, $nome);
			$resultado = $stm->execute();
			if (isset($resultado)) {
				$alunos = array();
				while ($aluno = $stm->fetchObject())
					array_push($alunos, $aluno);
				return $alunos;
			}
		}
		return -1;
	}
}
?>