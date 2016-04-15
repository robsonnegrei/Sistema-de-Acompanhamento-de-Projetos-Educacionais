<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 21/01/16
 * Time: 03:07
 */
include_once 'Conexao.php';
include_once '../Model/TurmaDAO.php';

if(isset($_POST['acao'])){
    $acao = $_POST['acao'];
    if($acao == "cadastrar"){
        $nome = $_POST['nome'];
        $idEscola = $_POST['idEscola'];
        $idRegional = $_POST['idRegional'];
        $c = new ControladorTurma();
        if($c->cadastrarTurma($nome, $idEscola)== -1) {
            //retornar mensagem de erro;
        }
        header('location:../coord/escola.php?idRegional='.$idRegional.'&idEscola='.$idEscola);
    }

}else if(isset($_GET['acao'])){
        if($_GET['acao'] == "excluir"){
            $c = new ControladorTurma();
            $idTurma = $_GET['idTurma'];
            $idEscola = $_GET['idEscola'];
            $idRegional = $_GET['idRegional'];
            if($c->removerTurma($idTurma) == -1){
                //mostrar Erro
            }
            header('location:../coord/escola.php?idRegional='.$idRegional.'&idEscola='.$idEscola);
    }
}

class ControladorTurma{
    private $dao;
    public function __construct(){
        $conexao = new TurmaDAO(Conexao::getConexao());
        if (is_bool($conexao))
            return -1;
        $this->dao = $conexao;
    }
    public static function getInstance(){
        return new ControladorTurma();
    }
    public function cadastrarTurma($nome,$idEscola){
        if (isset($nome, $idEscola)) {
            $turma = new Turma();
            $turma->setNome($nome);
            $turma->setIdEscola($idEscola);
            return $this->dao->inserir($turma);
        }
    }
    public function removerTurma($idTurma){
        if (isset($idTurma)) {
            $turma = new Turma();
            $turma->setIdTurma($idTurma);
            return $this->dao->remover($turma);
        }
    }
    public function editar($nome,$idEscola,$idTurma){
        if (isset($nome, $idEscola, $idTurma)) {
            $turma = new Turma();
            $turma->setIdTurma($idTurma);
            $turma->setNome($nome);
            $turma->setIdEscola($idEscola);
            return $this->dao->editarTurma($turma);
        }
    }
    public function buscarTurmasEscola($idEscola){
        if (isset($idEscola)) {
            $turma = new Turma();
            $turma->setIdEscola($idEscola);
            return $this->dao->getTurmasEscolas($idEscola);
        }
    }
    public function buscarTurmas(){
            return $this->dao->getAllTurmas();
    }
    public function getTurma($idTurma){
        if(isset($idTurma))
            return $this->dao->getTurma($idTurma);
    }
}