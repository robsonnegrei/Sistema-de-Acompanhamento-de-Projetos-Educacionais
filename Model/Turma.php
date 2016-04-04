<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 20/01/16
 * Time: 20:03
 */

class Turma{
    public $idEscola;
    public $idTurma;
    public $nome;

    /**
     * @return mixed
     */
    public function getIdEscola()
    {
        return $this->idEscola;
    }

    /**
     * @param mixed $idEscola
     */
    public function setIdEscola($idEscola)
    {
        $this->idEscola = $idEscola;
    }

    /**
     * @return mixed
     */
    public function getIdTurma()
    {
        return $this->idTurma;
    }

    /**
     * @param mixed $idTurma
     */
    public function setIdTurma($idTurma)
    {
        $this->idTurma = $idTurma;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

}