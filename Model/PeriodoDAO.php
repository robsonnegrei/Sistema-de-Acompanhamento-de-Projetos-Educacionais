<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 21/01/16
 * Time: 03:43
 */
include_once 'Periodo.php';
include_once '../Controller/Conexao.php';

class PeriodoDAO{

    private $conexao;

    public function __construct($conexao){
            $this->conexao = $conexao;

    }
    public function inserir(Periodo $periodo){
            $sql = "insert into periodo(nivel, idAluno, idPeriodo) values (?,?,?)";
            $a = $this->conexao->prepare($sql);

            $a->bindParam(1, $periodo->nivel);
            $a->bindParam(2, $periodo->idAluno);
            $a->bindParam(3, $periodo->idPeriodo);
            if( !$a->execute())
                return -1;
            return 1;
    }
    public function editar($periodo){
        $nivel = $periodo->nivel;
        $idAluno = $periodo->idAluno;
        $idPeriodo = $periodo->idPeriodo;

            $sql = "update periodo set nivel= ? where idPeriodo = ? and idAluno = ?";

            $a = $this->conexao->prepare($sql);

            $a->bindParam(1, $nivel);
            $a->bindParam(2, $idPeriodo);
            $a->bindParam(3, $idAluno);
            if(! $a->execute())
                return -1;
            return 1;
    }
    public function remover(Periodo $periodo){

            $sql = "delete from periodo where idPeriodo = ? ";
            $a = $this->conexao->prepare($sql);
            $a->bindParam(1,$periodo->getIdPeriodo());
            if(! $a->execute())
                return -1;
            return 1;
    }
    public function editarPeriodo(Periodo $periodo){

            $sql = "update periodo set nivel = ?, idAluno = ? where idPeriodo= ?";

            $a = $this->conexao->prepare($sql);
            $a->bindParam(1,$periodo->getNivel());
            $a->bindParam(2,$periodo->getIdAluno());
            $a->bindParam(3,$periodo->getIdPeriodo());

            if(!$a->execute())
                return -1;
            return 1;

    }
    public function getIdAlunoPeriodo(Periodo $periodo){

            $sql = "select * from periodo where idPeriodo = ".$periodo->idPeriodo;
            $resultado = $this->conexao->query($sql);
            if(!isset($resultado))
                return -1;
            $arrayIdAlunos = array();
            foreach ($resultado as $valor) {
                # code...
                $aluno = new Aluno();
                $aluno->idAluno = $valor['idAluno'];
                $aluno->nivel = $valor['nivel'];
                array_push($arrayIdAlunos, $aluno);
            }
            return $arrayIdAlunos;
    }
    public function getNivelAluno($idPeriodo,$idAluno){
            $sql = "select *from periodo where idPeriodo = ? and idAluno = ?";
            $stm = $this->conexao->prepare($sql);
            $stm->bindParam(1,$idPeriodo);
            $stm->bindParam(2,$idAluno);
            if(!$stm->execute())
                return -1;
            $dados = $stm->fetchObject();
            return $dados;
    }
    public function getValoresEscolaPeriodo($idEscola, $periodo){
        $controladorAluno = new ControladorAluno();
        $alunos = $controladorAluno->buscarAlunosPorEscola($idEscola);
        $array_valores = array();
            if(!isset($alunos))
                return -1;
            foreach ($alunos as $aluno) {
                # code...
                $sql = "select nivel from periodo where idPeriodo = ".$periodo." and idAluno = ".$aluno->idAluno;
                $resultado = $this->conexao->query($sql);

                foreach ($resultado as $valor) {
                    # code...
                    array_push($array_valores, $valor['nivel']);
                }
            }
        return $array_valores;
    }
}