<?php  
include_once '../Controller/Conexao.php';
include_once '../Model/Post.php';

class PostDAO{

	private $conexao;

	public function __construct($conexao){
		try{
			$this->conexao = $conexao;
		}catch(Exception $e){
			return false;
		}
	}

	public function inserir($mensagem,$idRegional){
		try{
			$sql = "insert into posts (mensagem,idRegional) values (?,?)";

			$stm = $this->conexao->prepare($sql);
			$stm->bindParam(1,$mensagem);
			$stm->bindParam(2,$idRegional);
			return $stm->execute();

		}catch(Exception $e){
			return false;
		}
	}

	public function getPostsPorRegional($idRegional){
		try{
			$sql = "select *from posts where idRegional =?";
			
			$stm = $this->conexao->prepare($sql);
			$stm->bindParam(1,$idRegional);

			if(!$stm->execute())
				return false;

			$arrayPosts = array();

			while($post = $stm->fetchObject())
				array_push($arrayPosts, $post);

			return $arrayPosts;

		}catch(Exception $e){
			return $info_error($e);
		}
	}

	public function getAllPosts(){
		try{
			$sql = "select *from posts";
			
			$stm = $this->conexao->prepare($sql);

			if(!$stm->execute())
				return false;

			$arrayPosts = array();

			while($post = $stm->fetchObject())
				array_push($arrayPosts, $post);

			return $arrayPosts;



		}catch(Exception $e){
			return $info_error($e);
		}
	}

	public function deletePost($idPost){
		try{
			$sql = "delete from posts where idPost = ? ";

			$stm = $this->conexao->prepare($sql);
			$stm->bindParam(1,$idPost);

			return $stm->execute();
		}catch(Exception $e){
			return $info_error($e);
		}
	}


}