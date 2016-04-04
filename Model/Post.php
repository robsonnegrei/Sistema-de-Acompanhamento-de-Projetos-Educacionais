<?php  

class Post{
	public $idPost;
	public $idImagem;
	public $idRegional;


	public function getIdPost(){
		return $this->idPost;
	}

	public function getIdImagem(){
		return $this->idImagem;
	}

	public function setIdPost($idPost){
		$this->idPost = $idPost;
	} 

	public function setIdImagem($idImagem){
		$this->idImagem = $idImagem;
	}

	public function getIdRegional(){
		return $this->idRegional;
	}

	public function setIdRegional($idRegional){
		$this->idRegional = $idRegional;
	} 

}