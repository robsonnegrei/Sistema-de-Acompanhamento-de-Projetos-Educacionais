<?php 
include_once 'Conexao.php';
include_once '../Model/PostDAO.php';

if(isset($_POST['acao'])){
    $acao = $_POST['acao'];
    if($acao == "cadastrar") {
        $mensagem = $_POST['mensagem'];
        $idRegional = $_POST['idRegional'];
        try {
            $c = new ControlePost();
            $c->cadastrarPost($mensagem, $idRegional);
        }catch (Exception $e) {
            header('location:../coord/indexPost.php');
        }
    }
}else if(isset($_GET["acao"])){
    $acao = $_GET['acao'];
    if($acao == "excluir"){
        $idPost = $_GET['idPost'];
        try {
            $cp = new ControlePost();
            $cp->removerPost($idPost);
        }catch (Exception $e) {
            header('location:../coord/indexPost.php');
        }
    }
}
class ControlePost{
	private $dao;

	public function __construct(){
    	$conexao = new PostDAO(Conexao::getConexao());
        if(is_bool($conexao))
            throw new Exception();
        $this->dao = $conexao;
    }

    public function cadastrarPost($mensagem,$idRegional){
        try {
            if (isset($mensagem)) {
                return $this->dao->inserir($mensagem, $idRegional);
            }
        }catch (Exception $e){
            throw $e;
        }
    }

    public function pegarPostRegional($idRegional){
        try {
            if (isset($idRegional))
                return $this->dao->getPostsPorRegional($idRegional);
        }catch (Exception $e){
            throw $e;
        }
    }

    public function removerPost($idPost){
        try {
            if (!empty($idPost))
                return $this->dao->deletePost($idPost);
        }catch (Exception $e){
            throw $e;
        }
    }

}