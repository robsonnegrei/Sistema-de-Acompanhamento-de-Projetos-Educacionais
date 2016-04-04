<?php 
include_once '../Controller/Conexao.php';
include_once 'Escola.php';

class EscolaDAO{
	private $conexao;

	public function __construct(){
		try{
			$this->conexao = Conexao::getConexao();
		}catch(Exception $e){
			return false;
		}
	}



	public function getAllEscolas(){
		try{
			$sql = "select * from escola";

			$a = $this->conexao->prepare($sql);

			if(!$a->execute())
				return false;

			$arrayEscolas = array();

			while ($escola = $a->fetchObject())
				array_push($arrayEscolas, $escola);

			return $arrayEscolas;
		}catch(Exception $e){
			return false;
		}
	}

	public function getEscolasRegional($idRegional){
			
			try{

			$sql = "select *from escola where idRegional = ?";


			$stm = $this->conexao->prepare($sql);

			$stm->bindParam(1,$idRegional);

			if(!$stm->execute())
				return false;

			$escolas = array();

            $arrayalunos = array();

            while($escola = $stm->fetchObject())
                array_push($escolas,$escola);

             return $escolas;
         }catch(Exception $e){
         	return null; 
         }	
        

		
	}

	public function getEscola($idEscola){
		try{
			$sql = "select * from escola where idEscola = ?";

			$stm= $this->conexao->prepare($sql);

			$stm->bindParam(1,$idEscola);

			if(!$stm->execute())
				return false;


			return $stm->fetchObject();

		}catch(Exception $e){
			return false;
		}
	}

	public function inserir(Escola $escola){

		try {
			$sql = "insert into escola(nome, idRegional) values (?,?)";

			$a = $this->conexao->prepare($sql);

			$a->bindParam(1, $escola->getNome());
			$a->bindParam(2, $escola->getIdRegional());

			return $a->execute();

		}catch (Exception $e) {
			return false;
		}
	}
	public function remover(Escola $escola){
		try{
			$sql = "delete from escola where idEscola = ? ";

			$a = $this->conexao->prepare($sql);

			$a->bindParam(1,$escola->getIdEscola());

			return $a->execute();
		}catch(Exception $e){
			return false;
		}
	}

	public function editarEscola(Escola $escola){

		try{
			$sql = "update escola set nome = ? where idEscola= ?";

			$a = $this->conexao->prepare($sql);
			$a->bindParam(1,$escola->getNome());
			$a->bindParam(2,$escola->getIdEscola());
			

			return $a->execute();

		}catch(Exception $e){
			return false;
		}
	}


}
