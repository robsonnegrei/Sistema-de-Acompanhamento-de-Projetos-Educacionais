<?php
include_once 'Conexao.php';
include_once '../Model/RegionalDAO.php';
include_once '../Model/Usuario.php';

if(isset($_POST['acao'])){
    $acao = $_POST['acao'];
    if($acao == "cadastrar"){
        $nome = $_POST['nome'];
        $c = new ControladorRegional();
        if($c->cadastrarRegional($nome) == -1)
            header('location:../admin/index.php');

    }else if($acao == "editar"){
        $nome = $_POST['nome'];
        $idRegional = $_POST['idRegional'];
        $c = new ControladorRegional();
        if($c->editar($nome, $idRegional) == -1)
            header('location:../admin/regional.php?id_regional=' . $idRegional);
    }
}else if(isset($_GET['acao'])){
    $acao = $_GET['acao'];
    if($acao == "excluir"){
        $idRegional = $_GET['idRegional'];
        $c = new ControladorRegional();
        if($c->removerRegional($idRegional) == -1)
            header('location:../admin/index.php');
    }
}
class ControladorRegional{
    private $dao;

    public function __construct(){
        $conexao = new RegionalDAO(Conexao::getConexao());
        if(is_bool($conexao))
            return -1;
        $this->dao = $conexao;
    }
    public static function getInstance(){
        return new ControladorRegional();
    }
    public function cadastrarRegional($nome){
        if (isset($nome)) {
            return $this->dao->inserir($nome);
        }
    }
    public function getRegional($idRegional){
        if (isset($idRegional))
            return $this->dao->getRegionalPorId($idRegional);
    }
    public function removerRegional($idRegional){
        if (isset($idRegional)) {
            $regional = new Regional();
            $regional->setIdRegional($idRegional);
            return $this->dao->remover($regional);
        }
    }
    public function editar($nome,$idRegional){
        if (isset($nome, $idRegional)) {
            $regional = new Regional();
            $regional->setIdRegional($idRegional);
            $regional->setNome($nome);
            return $this->dao->editarRegional($regional);
        }
    }
    public function buscarTodasRegionais(){
            return $this->dao->getAllRegionais();
    }
}