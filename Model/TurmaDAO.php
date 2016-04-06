<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 21/01/16
 * Time: 02:57
 */
include_once 'Turma.php';
include_once '../Controller/Conexao.php';

class TurmaDAO{
    private $conexao;

    public function __construct(){
        try{
            $this->conexao = Conexao::getConexao();
        }catch(Exception $e){
            return -1;
        }
    }
    public function getTurmasEscolas($idEscola){
            $sql = "select *from turma where idEscola = ?";
            $resultado = $this->conexao->prepare($sql);
            $resultado->bindParam(1,$idEscola);
            if(!$resultado->execute())
                return -1;
            $arrayTurmas = array();
            while($turma = $resultado->fetchObject())
                array_push($arrayTurmas, $turma);
            return $arrayTurmas;
    }
    public function getAllTurmas(){
            $sql = "select * from turma";
            $a = $this->conexao->prepare($sql);
            if(!$a->execute())
                return -1;
            $arrayTurmas = array();
            while ($turma = $a->fetchObject())
                array_push($arrayTurmas, $turma);
            return $arrayTurmas;
    }
    public function inserir(Turma $turma){
            $sql = "insert into turma(nome_turma, idEscola) values (?,?)";
            $a = $this->conexao->prepare($sql);
            $a->bindParam(1, $turma->getNome());
            $a->bindParam(2, $turma->getIdEscola());

            if(!$a->execute())
                return -1;
            return 1;
    }
    public function remover(Turma $turma){
            $sql = "delete from turma where idTurma = ? ";
            $a = $this->conexao->prepare($sql);
            $a->bindParam(1,$turma->getIdTurma());
            if(!$a->execute())
                return -1;
            return 1;
    }
    public function editarTurma(Turma $turma){
            $sql = "update turma set nome_turma = ?, idEscola = ? where idTurma= ?";
            $a = $this->conexao->prepare($sql);
            $a->bindParam(1,$turma->getNome());
            $a->bindParam(2,$turma->getIdEscola());
            $a->bindParam(3,$turma->getIdTurma());
            if(!$a->execute())
                return -1;
            return 1;
    }
    public function getTurma($idTurma){
            $sql = "select * from turma where idTurma = ".$idTurma;
            $resultado = $this->conexao->query($sql);
            if(!isset($resultado))
                return -1;
            $turma = new Turma();
            foreach ($resultado as $valor) {
                $turma->idEscola = $valor['idEscola'];
                $turma->idTurma = $valor['idTurma'];
                $turma->nome = $valor['nome_turma']; 
            }
            return $turma;
    }
}