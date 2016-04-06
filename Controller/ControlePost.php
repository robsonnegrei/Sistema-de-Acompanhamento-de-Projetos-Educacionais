<?php 
include_once 'Conexao.php';
include_once '../Model/PostDAO.php';

if(isset($_POST['acao'])){
    $acao = $_POST['acao'];
    if($acao == "cadastrar") {
        $mensagem = $_POST['mensagem'];
        $idRegional = $_POST['idRegional'];
        $c = new ControlePost();
        if($c->cadastrarPost($mensagem, $idRegional) == -1)
            header('location:../coord/indexPost.php');
    }
}else if(isset($_GET["acao"])){
    $acao = $_GET['acao'];
    if($acao == "excluir"){
        $idPost = $_GET['idPost'];
        $cp = new ControlePost();
        if($cp->removerPost($idPost) == -1)
            header('location:../coord/indexPost.php');
    }
}
class ControlePost{
	private $dao;

	public function __construct(){
    	$conexao = new PostDAO(Conexao::getConexao());
        if(is_bool($conexao))
            return -1;
        $this->dao = $conexao;
    }
    public function cadastrarPost($mensagem,$idRegional){
        if (isset($mensagem)){
            return $this->dao->inserir($mensagem, $idRegional);
        }
    }
    public function pegarPostRegional($idRegional){
        if (isset($idRegional))
            return $this->dao->getPostsPorRegional($idRegional);
    }
    public function removerPost($idPost){
        if (!empty($idPost))
            return $this->dao->deletePost($idPost);
    }
}