<?php  
include_once '../Controller/Conexao.php';
include_once '../Model/Post.php';

class PostDAO{

	private $conexao;

	public function __construct($conexao){
		try{
			$this->conexao = $conexao;
		}catch(Exception $e){
			return -1;
		}
	}
	public function inserir($mensagem,$idRegional){

			$sql = "insert into posts (mensagem,idRegional) values (?,?)";
			$stm = $this->conexao->prepare($sql);
			$stm->bindParam(1,$mensagem);
			$stm->bindParam(2,$idRegional);
			if(!$stm->execute())
				return -1;
			return 1;
	}
	public function getPostsPorRegional($idRegional){
			$sql = "select *from posts where idRegional =?";
			$stm = $this->conexao->prepare($sql);
			$stm->bindParam(1,$idRegional);
			if(!$stm->execute())
				return -1;
			$arrayPosts = array();
			while($post = $stm->fetchObject())
				array_push($arrayPosts, $post);
			return $arrayPosts;
	}
	public function getAllPosts(){

			$sql = "select *from posts";
			$stm = $this->conexao->prepare($sql);

			if(!$stm->execute())
				return -1;
			$arrayPosts = array();

			while($post = $stm->fetchObject())
				array_push($arrayPosts, $post);
			return $arrayPosts;
	}
	public function deletePost($idPost){

			$sql = "delete from posts where idPost = ? ";
			$stm = $this->conexao->prepare($sql);
			$stm->bindParam(1,$idPost);

			 if(!$stm->execute())
				 return -1;
			return 1;
	}
}