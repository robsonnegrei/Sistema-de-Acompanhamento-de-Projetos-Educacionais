<?php 
include_once '../Controller/Conexao.php';
include_once 'Escola.php';

class EscolaDAO{
	private $conexao;

	public function __construct(){
		try{
			$this->conexao = Conexao::getConexao();
		}catch(Exception $e){
			return -1;
		}
	}



	public function getAllEscolas(){
		$sql = "select * from escola";
		$a = $this->conexao->prepare($sql);
		if (!$a->execute())
			return -1;
		$arrayEscolas = array();
		while ($escola = $a->fetchObject())
			array_push($arrayEscolas, $escola);
		return $arrayEscolas;
	}
	public function getEscolasRegional($idRegional){

		$sql = "select * from escola where idRegional = ?";
		$stm = $this->conexao->prepare($sql);
		$stm->bindParam(1,$idRegional);
			if(!$stm->execute())
				return -1;
			$escolas = array();
            $arrayalunos = array();
            while($escola = $stm->fetchObject())
                array_push($escolas,$escola);

             return $escolas;
		
	}

	public function getEscola($idEscola){

			$sql = "select * from escola where idEscola = ?";

			$stm= $this->conexao->prepare($sql);

			$stm->bindParam(1,$idEscola);

			if(!$stm->execute())
				return -1;
			return $stm->fetchObject();
	}

	public function inserir(Escola $escola){

			$sql = "insert into escola(nome, idRegional) values (?,?)";

			$a = $this->conexao->prepare($sql);

			$a->bindParam(1, $escola->getNome());
			$a->bindParam(2, $escola->getIdRegional());

			if( !$a->execute()){
				return -1;
			}
			return 1;

	}
	public function remover(Escola $escola){
			$sql = "delete from escola where idEscola = ? ";
			$a = $this->conexao->prepare($sql);
			$a->bindParam(1,$escola->getIdEscola());
			if(!$a->execute())
				return -1;
			return 1;
	}

	public function editarEscola(Escola $escola){

			$sql = "update escola set nome = ? where idEscola= ?";
			$a = $this->conexao->prepare($sql);
			$a->bindParam(1,$escola->getNome());
			$a->bindParam(2,$escola->getIdEscola());
			if(! $a->execute())
				return -1;
			return 1;

	}
	
}
