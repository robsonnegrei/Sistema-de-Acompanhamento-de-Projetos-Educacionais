<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 21/01/16
 * Time: 03:52
 */
include_once '../Model/PeriodoDAO.php';
include_once 'ControladorAluno.php';
include_once 'Conexao.php';


if(isset($_POST['acao_periodo'])){
    $acao = $_POST['acao_periodo'];
    if($acao == "cadastrar"){
        $controladorAluno = new ControladorAluno();
        $controladorPeriodo = new ControladorPeriodo();
        $idEscola = $_POST['idEscola'];
        $idRegional = $_POST['idRegional'];
        $periodo = $_POST['periodo'];
        $alunos = $controladorAluno->buscarAlunosPorEscola($idEscola);
        if($alunos == -1){
            // mostrar erro
        }
        foreach ($alunos as $aluno) {
            $nivel_aluno = $_POST['id' . $aluno->idAluno];

            if ($controladorPeriodo->existe($periodo, $aluno->idAluno)) {
                $c = new ControladorPeriodo();
                if($c->editar($nivel_aluno, $periodo, $aluno->idAluno) == -1) {
                    //mostrar erro
                }
                header('location:../coord/escola.php?idEscola='.$idEscola+'&idRegional='.$idRegional);
            }else{
                $c = new ControladorPeriodo();
                if($c->cadastrarNivelDoAlunoPeriodo($periodo, $nivel_aluno, $aluno->idAluno)== -1) {
                    //mostrar erro
                }
                header('location:../coord/escola.php?idEscola='.$idEscola+'&idRegional='.$idRegional);
            }
        }
    }
}
    
class ControladorPeriodo{
    private $dao;

    public function __construct(){
        $conexao = new PeriodoDAO(Conexao::getConexao());
        if(is_bool($conexao))
            return -1;
        $this->dao = $conexao;
    }
    public static function getInstance(){
        return new ControladorPeriodo();
    }
    public function cadastrarNivelDoAlunoPeriodo($idPeriodo, $nivel, $idAluno){
            $periodo = new Periodo();
            $periodo->setNivel($nivel);
            $periodo->setIdAluno($idAluno);
            $periodo->setIdPeriodo($idPeriodo);
            return $this->dao->inserir($periodo);
    }
    public function removerPeriodo($idPeriodo){
        if (isset($idPeriodo)) {
            $periodo = new Periodo();
            $periodo->setIdPeriodo($idPeriodo);
            return $this->dao->remover($periodo);
        }
    }
    public function editar($nivel,$idPeriodo,$idAluno){
            $periodo = new Periodo();
            $periodo->idPeriodo = $idPeriodo;
            $periodo->nivel = $nivel;
            $periodo->idAluno = $idAluno;
            return $this->dao->editar($periodo);
    }
    public function getDadosAlunoPorPeriodo($idPeriodo){
        if (isset($idPeriodo)) {
            $periodo = new Periodo();
            $periodo->setIdPeriodo($idPeriodo);
            return $this->dao->getIdAlunoPeriodo($periodo);
        }
    }
    public function getNivelAlunoPeriodo($idPeriodo,$idAluno){
        if (isset($idPeriodo) & isset($idAluno))
            return $this->dao->getNivelAluno($idPeriodo, $idAluno);
    }
    public function existe($idPeriodo, $idAluno){
        $periodo = new Periodo();
        $periodo->idPeriodo = $idPeriodo;
        $alunos = $this->dao->getIdAlunoPeriodo($periodo);
        if (isset($alunos)) {
            foreach ($alunos as $aluno) {
                if ($aluno->idAluno == $idAluno) {
                    return true;
                }
            }
        }
        return false;
    }
    public function getValoresDaEscolaDoPeriodo($idEscola, $periodo){
        $valores = $this->dao->getValoresEscolaPeriodo($idEscola, $periodo);
            return $valores;
    }

}
