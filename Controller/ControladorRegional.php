<?php
include_once 'Conexao.php';
include_once '../Model/RegionalDAO.php';
include_once '../Model/Usuario.php';

if(isset($_POST['acao'])){
    $acao = $_POST['acao'];
    if($acao == "cadastrar"){
        $nome = $_POST['nome'];
        //$email = $_POST['email'];
        //$senha = $_POST['senha'];
        try {
            $c = new ControladorRegional();
            $c->cadastrarRegional($nome);
        }catch (Exception $e) {
            header('location:../admin/index.php');
        }
    }else if($acao == "editar"){
        $nome = $_POST['nome'];
        $idRegional = $_POST['idRegional'];
        try {
            $c = new ControladorRegional();
            $c->editar($nome, $idRegional);
        }catch (Exception $e) {
            header('location:../admin/regional.php?id_regional=' . $idRegional);
        }
    }
}else if(isset($_GET['acao'])){
    $acao = $_GET['acao'];
    if($acao == "excluir"){
        $idRegional = $_GET['idRegional'];
        try {
            $c = new ControladorRegional();
            $c->removerRegional($idRegional);
        }catch (Exception $e) {
            header('location:../admin/index.php');
        }
    }
}




class ControladorRegional{
    private $dao;

    public function __construct(){
        $conexao = new RegionalDAO(Conexao::getConexao());
        if(is_bool($conexao))
            throw new Exception();
        $this->dao = $conexao;
    }

    public static function getInstance(){
        return new ControladorRegional();
    }

    public function cadastrarRegional($nome){
        try {
            if (isset($nome)) {
                return $this->dao->inserir($nome);
            }
        }catch (Exception $e){
            throw $e;
        }
    }

    public function getRegional($idRegional){
        try {
            if (isset($idRegional))
                return $this->dao->getRegionalPorId($idRegional);
        }catch (Exception $e){
            throw $e;
        }
    }

    public function removerRegional($idRegional){
        try {
            if (isset($idRegional)) {
                $regional = new Regional();
                $regional->setIdRegional($idRegional);
                return $this->dao->remover($regional);
            }
        }catch (Exception $e){
            throw $e;
        }
    }

    public function editar($nome,$idRegional){
        try {
            if (isset($nome, $idRegional)) {
                $regional = new Regional();
                $regional->setIdRegional($idRegional);
                $regional->setNome($nome);
                return $this->dao->editarRegional($regional);
            }
        }catch (Exception $e){
            throw $e;
        }
    }


    public function buscarTodasRegionais(){
        try {
            return $this->dao->getAllRegionais();
        }catch (Exception $e){
            throw $e;
        }
    }
}