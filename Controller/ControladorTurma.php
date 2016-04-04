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
        var_dump($idEscola);
        try {
            $c = new ControladorTurma();
            $c->cadastrarTurma($nome, $idEscola);
        }catch (Exception $e) {
            header('location:../coord/escola.php?idEscola=' . $idEscola);
        }
    }
}else if(isset($_POST['acao'])){
    $acao = $_POST['acao'];
    if($acao == "excluir"){
        $idTurma = $_POST['idTurma'];
        var_dump($idEscola);
        try {
            $c = new ControladorTurma();
            $c->removerTurma($idTurma);
        }catch (Exception $e) {
            header('location:../coord/escola.php?idEscola=' . $idEscola);
        }
    }
}





class ControladorTurma{
    private $dao;

    public function __construct(){
        $conexao = new TurmaDAO(Conexao::getConexao());
        if (is_bool($conexao))
            throw new Exception();
        $this->dao = $conexao;
    }

    public static function getInstance(){
        return new ControladorTurma();
    }

    public function cadastrarTurma($nome,$idEscola){
        try {
            if (isset($nome, $idEscola)) {
                $turma = new Turma();
                $turma->setNome($nome);
                $turma->setIdEscola($idEscola);
                return $this->dao->inserir($turma);
            }
        }catch (Exception $e){
            throw $e;
        }
    }

    public function removerTurma($idTurma){
        try {
            if (isset($idTurma)) {
                $turma = new Turma();
                $turma->setIdTurma($idTurma);
                return $this->dao->remover($turma);
            }
        }catch (Exception $e){
            throw $e;
        }
    }

    public function editar($nome,$idEscola,$idTurma){
        try {
            if (isset($nome, $idEscola, $idTurma)) {
                $turma = new Turma();
                $turma->setIdTurma($idTurma);
                $turma->setNome($nome);
                $turma->setIdEscola($idEscola);
                return $this->dao->editarTurma($turma);
            }
        }catch (Exception $e){
            throw $e;
        }
    }
    public function buscarTurmasEscola($idEscola){
        try {
            if (isset($idEscola)) {
                $turma = new Turma();
                $turma->setIdEscola($idEscola);
                return $this->dao->getTurmasEscolas($idEscola);
            }
        }catch (Exception $e){
            throw $e;
        }
    }

    public function buscarTurmas(){
        try {
            return $this->dao->getAllTurmas();
        }catch (Exception $e){
            throw $e;
        }
    }

    public function getTurma($idTurma){
        try {
            return $this->dao->getTurma($idTurma);
        }catch (Exception $e){
            throw $e;
        }
    }
}