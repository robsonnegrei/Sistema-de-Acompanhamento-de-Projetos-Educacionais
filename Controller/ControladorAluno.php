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
        try {
            $c = new ControladorAluno();
            $c->cadastrarAluno($nome, $idTurma);
        }catch (Exception $e){
            header('location:../coord/turma.php?idTurma='.$idTurma.' & idEscola='.$idEscola);
        }
    }else if($acao == "editar"){
        $nome = $_POST['nome'];
        $idTurmaNova = $_POST['idTurmaNova'];
        $idTurma = $_POST['idTurma'];
        $idEscola = $_POST['idEscola'];
        $idAluno = $_POST['idAluno'];
        //TODO instanciar uma vez
        try {
            $c = new ControladorAluno();
            $c->editar($nome, $idTurmaNova, $idAluno);
            header('location:../coord/turma.php?idTurma=' . $idTurma . ' & idEscola=' . $idEscola);
        }catch(Exception $e){
            //TODO MUDAR PARA MOSTRAR UMA MENSAGEM DE ERRO
            header('location:../coord/turma.php?idTurma=' . $idTurma . ' & idEscola=' . $idEscola);

        }

    }
}else if(isset($_GET["acao"])){
    $acao = $_GET['acao'];
    if($acao == "excluir"){
        $idAluno = $_GET['idAluno'];
        $idTurma = $_GET['idTurma'];
        $idEscola = $_GET['idEscola'];
        try {
            $a = new ControladorAluno();
            $a->removerAluno($idAluno);
        }catch (Exception $e) {
            header('location:../coord/turma.php?idTurma=' . $idTurma . ' & idEscola=' . $idEscola);
            $e.message();
        }
    }
}




class ControladorAluno{
    private $dao;

    public function __construct(){
        $conexao = Conexao::getConexao();
        if(is_bool($conexao))
            throw new Exception();
        $this->dao = new AlunoDAO($conexao);

    }

    public static function getInstance(){
        return new ControladorAluno();
    }

    public function cadastrarAluno($nome,$idTurma){
        if(isset($nome,$idTurma)){
            try {
                $aluno = new Aluno();
                $aluno->setNome($nome);
                $aluno->setIdTurma($idTurma);
                return $this->dao->inserir($aluno);
            }catch (Exception $e){
                throw $e;
            }
        }
    }

    public function removerAluno($idAluno){
        if(isset($idAluno)){
            try {
                $aluno = new Aluno();
                $aluno->setIdAluno($idAluno);
                return $this->dao->remover($aluno);
            }catch (Exception $e){
                throw $e;
            }
        }
    }

    public function editar($nome,$idTurma,$idAluno){
        if(isset($nome,$idTurma,$idAluno)){
            try {
                $aluno = new Aluno();
                $aluno->setIdTurma($idTurma);
                $aluno->setNome($nome);
                $aluno->setIdAluno($idAluno);
                return $this->dao->editarAluno($aluno);
            }catch (Exception $e){
                throw $e;
            }
        }
    }

    public function buscarAluno($idAluno){
        if(isset($idAluno)){
            try {
                $aluno = new Aluno();
                $aluno->setIdAluno($idAluno);
                $aluno = $this->dao->getAluno($aluno);
                return $aluno;
            }catch (Exception $e){
                throw $e;
            }
        }   
    }

    public function buscarAlunosPorTurma($idTurma){
        if(isset($idTurma)){
            try {
                $aluno = new Aluno();
                $aluno->setIdTurma($idTurma);
                return $this->dao->getAlunosTurma($aluno);
            }catch (Exception $e){
                throw $e;
            }
        }
    }

    public function buscarAlunos(){
        try {
            return $this->dao->getAlunos();
        }catch (Exception $e){
            throw $e;
        }
    }

    public function buscarAlunosPorEscola($idEscola){
        try {
            $alunos = $this->dao->getAlunosDaEscola($idEscola);
            return $alunos;
        }catch (Exception $e){
            throw $e;
        }
    }



    public function pesquisarAluno($nome){
        try {
            if (isset($nome))
                return $this->dao->pesquisarAluno($nome);
        }catch (Exception $e){
            throw $e;
        }
    }



}