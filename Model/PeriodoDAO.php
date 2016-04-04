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
        try{
            $this->conexao = $conexao;
        }catch(Exception $e){
            return false;
        }
    }


    //alterado
    public function inserir(Periodo $periodo){

        try {
            $sql = "insert into periodo(nivel, idAluno, idPeriodo) values (?,?,?)";

            $a = $this->conexao->prepare($sql);

            $a->bindParam(1, $periodo->nivel);
            $a->bindParam(2, $periodo->idAluno);
            $a->bindParam(3, $periodo->idPeriodo);

            return $a->execute();

        }catch (Exception $e) {
            return false;
        }
    }

    public function editar($periodo){
        $nivel = $periodo->nivel;
        $idAluno = $periodo->idAluno;
        $idPeriodo = $periodo->idPeriodo;

        try {
            $sql = "update periodo set nivel= ? where idPeriodo = ? and idAluno = ?";

            $a = $this->conexao->prepare($sql);

            $a->bindParam(1, $nivel);
            $a->bindParam(2, $idPeriodo);
            $a->bindParam(3, $idAluno);
            

            return $a->execute();

        }catch (Exception $e) {
            return false;
        }   
    }


    public function remover(Periodo $periodo){
        try{
            $sql = "delete from periodo where idPeriodo = ? ";

            $a = $this->conexao->prepare($sql);

            $a->bindParam(1,$periodo->getIdPeriodo());

            return $a->execute();
        }catch(Exception $e){
            return false;
        }

    }
    public function editarPeriodo(Periodo $periodo){

        try{
            $sql = "update periodo set nivel = ?, idAluno = ? where idPeriodo= ?";

            $a = $this->conexao->prepare($sql);
            $a->bindParam(1,$periodo->getNivel());
            $a->bindParam(2,$periodo->getIdAluno());
            $a->bindParam(3,$periodo->getIdPeriodo());

            return $a->execute();

        }catch(Exception $e){
            return false;
        }
    }


    public function getIdAlunoPeriodo(Periodo $periodo){
        try {
            $sql = "select * from periodo where idPeriodo = ".$periodo->idPeriodo;

            $resultado = $this->conexao->query($sql);

            $arrayIdAlunos = array();
            
            foreach ($resultado as $valor) {
                # code...
                $aluno = new Aluno();
                $aluno->idAluno = $valor['idAluno'];
                $aluno->nivel = $valor['nivel'];
                array_push($arrayIdAlunos, $aluno);
            }

            return $arrayIdAlunos;
        }catch (Exception $e){
            return null;
        }
    }

    public function getNivelAluno($idPeriodo,$idAluno){
        try{
            $sql = "select *from periodo where idPeriodo = ? and idAluno = ?";

            $stm = $this->conexao->prepare($sql);

            $stm->bindParam(1,$idPeriodo);
            $stm->bindParam(2,$idAluno);

            if(!$stm->execute())
                return false;

            $dados = $stm->fetchObject();

            return $dados;

        }catch(Exception $e){
            return false;
        }
    }

    public function getValoresEscolaPeriodo($idEscola, $periodo){
        $controladorAluno = new ControladorAluno();
        $alunos = $controladorAluno->buscarAlunosPorEscola($idEscola);
        
        $array_valores = array();
    
        try{
            
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
        }catch(Exception $e){
            return null;
        }

        return $array_valores;
    }





}