<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 20/01/16
 * Time: 20:28
 */
include_once 'Conexao.php';
include_once '../Model/AlunoDAO.php';

if(isset($_POST['acao'])){
    $acao = $_POST['acao'];
    if($acao == "cadastrar"){
        $nome = $_POST['nome'];
        $idTurma = $_POST['idTurma'];
        $idEscola = $_POST['idEscola'];
        $c = new ControladorAluno();
        if($c->cadastrarAluno($nome, $idTurma) == -1)
            header('location:../coord/turma.php?idTurma='.$idTurma.' & idEscola='.$idEscola);
    }else if($acao == "editar"){
        $nome = $_POST['nome'];
        $idTurmaNova = $_POST['idTurmaNova'];
        $idTurma = $_POST['idTurma'];
        $idEscola = $_POST['idEscola'];
        $idAluno = $_POST['idAluno'];
        $c = new ControladorAluno();
            if($c->editar($nome, $idTurmaNova, $idAluno) == -1)
                 header('location:../coord/turma.php?idTurma=' . $idTurma . ' & idEscola=' . $idEscola);
        }
}else if(isset($_GET["acao"])){
    $acao = $_GET['acao'];
    if($acao == "excluir"){
        $idAluno = $_GET['idAluno'];
        $idTurma = $_GET['idTurma'];
        $idEscola = $_GET['idEscola'];
        $a = new ControladorAluno();
        if($a->removerAluno($idAluno) == -1)
            header('location:../coord/turma.php?idTurma=' . $idTurma . ' & idEscola=' . $idEscola);
    }
}

class ControladorAluno{
    private $dao;

    public function __construct(){
        $conexao = Conexao::getConexao();
        if(is_bool($conexao))
            return -1;
        $this->dao = new AlunoDAO($conexao);
    }
    public static function getInstance(){
        return new ControladorAluno();
    }
    public function cadastrarAluno($nome,$idTurma){
        if(isset($nome,$idTurma)) {
            $aluno = new Aluno();
            $aluno->setNome($nome);
            $aluno->setIdTurma($idTurma);
            return $this->dao->inserir($aluno);
        }
    }
    public function removerAluno($idAluno){
        if(isset($idAluno)) {
            $aluno = new Aluno();
            $aluno->setIdAluno($idAluno);
            return $this->dao->remover($aluno);
        }
    }
    public function editar($nome,$idTurma,$idAluno){
        if(isset($nome,$idTurma,$idAluno)) {
            $aluno = new Aluno();
            $aluno->setIdTurma($idTurma);
            $aluno->setNome($nome);
            $aluno->setIdAluno($idAluno);
            return $this->dao->editarAluno($aluno);
        }
    }
    public function buscarAluno($idAluno){
        if(isset($idAluno)) {
            $aluno = new Aluno();
            $aluno->setIdAluno($idAluno);
            $aluno = $this->dao->getAluno($aluno);
            return $aluno;
        }
    }
    public function buscarAlunosPorTurma($idTurma){
        if(isset($idTurma)){
                $aluno = new Aluno();
                $aluno->setIdTurma($idTurma);
                return $this->dao->getAlunosTurma($aluno);
        }
    }
    public function buscarAlunos(){
            return $this->dao->getAlunos();
    }
    public function buscarAlunosPorEscola($idEscola){
            $alunos = $this->dao->getAlunosDaEscola($idEscola);
            return $alunos;
    }
    public function pesquisarAluno($nome){
            if (isset($nome))
                return $this->dao->pesquisarAluno($nome);

    }
}