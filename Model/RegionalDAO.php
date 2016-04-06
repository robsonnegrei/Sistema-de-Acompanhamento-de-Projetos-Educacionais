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
			return -1;
		}
	}
	public function getAllRegionais(){
			$sql = "select * from regional";
			$resultado = $this->conexao->query($sql);
			if(!isset($resultado))
				return -1;
			$regionais = array();
            foreach ($resultado as $value) {
				$regional = new regional();
				$regional->idRegional = $value['idRegional'];             	
				$regional->nome = $value['nome'];
				array_push($regionais, $regional);
             }
		return $regionais;
	}
	public function getRegionalPorId($idRegional){
			$sql = "select *from regional where idRegional = ?";
			$stm = $this->conexao->prepare($sql);
			$stm->bindParam(1,$idRegional);
			if(!$stm->execute())
				return -1;
		return $stm->fetchObject();
	}
	public function getRegionalPorNome($nome){
		$regionais = $this->getAllRegionais();
		if(!isset($regionais))
			return -1;
		foreach ($regionais as $regional) {
					# code...
			if($regional->nome == $nome)
				return $regional->idRegional;
		}
	}
	public function inserir($nome){

			$sql = "insert into regional(nome) values (?)";
			$a = $this->conexao->prepare($sql);
			$a->bindParam(1,$nome);

			if(!$a->execute())
				return -1;
			return 1;
	}
	public function remover(Regional $regional){

			$sql = "delete from regional where idRegional = ? ";
			$a = $this->conexao->prepare($sql);
			$a->bindParam(1,$regional->getIdRegional());

			if(!$a->execute())
				return -1;
			return 1;
	}
	public function editarRegional(Regional $regional){

			$sql = "update regional set nome = ? where idRegional= ?";
			$a = $this->conexao->prepare($sql);
			$a->bindParam(1,$regional->getNome());
			$a->bindParam(2,$regional->getIdRegional());
			if(!$a->execute())
				return -1;
			return 1;
	}
}

