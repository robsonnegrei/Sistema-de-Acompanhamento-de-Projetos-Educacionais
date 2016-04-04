<?php
	include_once '../Controller/Conexao.php';
	include_once 'Regional.php';
	include_once 'Usuario.php';

class RegionalDAO{
	private $conexao;

	public function __construct(){
		try{
			$this->conexao = Conexao::getConexao();
		}catch(Exception $e){
			return false;
		}
	}

	public function getAllRegionais(){
		try{
			$sql = "select * from regional";
			$resultado = $this->conexao->query($sql);
			$regionais = array();
            foreach ($resultado as $value) {
				$regional = new regional();
				$regional->idRegional = $value['idRegional'];             	
				$regional->nome = $value['nome'];
				array_push($regionais, $regional);
             }
		}catch(Exception $e){
			echo errorInfo();
		}
		return $regionais;
	}

	public function getRegionalPorId($idRegional){
		try{
			$sql = "select *from regional where idRegional = ?";
			$stm = $this->conexao->prepare($sql);

			$stm->bindParam(1,$idRegional);
			if(!$stm->execute())
				return false;
		}catch(Exception $e){
			return false;
		}
		return $stm->fetchObject();
	}

	public function getRegionalPorNome($nome){
		$regionais = $this->getAllRegionais();
		foreach ($regionais as $regional) {
					# code...
			if($regional->nome == $nome)
				return $regional->idRegional;
		}

		return null;		
	}

	public function inserir($nome){

		try {
			$sql = "insert into regional(nome) values (?)";

			$a = $this->conexao->prepare($sql);

			$a->bindParam(1,$nome);

			return $a->execute();
			/*
			$idRegional = $this::getRegionalPorNome($regional->nome);
			$sql2 = "insert into usuario(email, senha) values(".$usuario->email.",".$usuario->senha.")";
			$r = $this->conexao->query($sql2);	*/



		}catch (Exception $e) {
			return false;
		}
	}
	public function remover(Regional $regional){
		try{
			$sql = "delete from regional where idRegional = ? ";

			$a = $this->conexao->prepare($sql);

			$a->bindParam(1,$regional->getIdRegional());

			return $a->execute();
		}catch(Exception $e){
			return false;
		}
	}

	public function editarRegional(Regional $regional){

		try{
			$sql = "update regional set nome = ? where idRegional= ?";

			$a = $this->conexao->prepare($sql);
			$a->bindParam(1,$regional->getNome());
			$a->bindParam(2,$regional->getIdRegional());

			return $a->execute();

		}catch(Exception $e){
			return false;
		}
	}


}

