<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 21/01/16
 * Time: 03:42
 */

class Periodo{
    public $idPeriodo;
    public $nivel;
    public $idAluno;

    /**
     * @return mixed
     */
    public function getIdPeriodo()
    {
        return $this->idPeriodo;
    }

    /**
     * @param mixed $idPeriodo
     */
    public function setIdPeriodo($idPeriodo)
    {
        $this->idPeriodo = $idPeriodo;
    }

    /**
     * @return mixed
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * @param mixed $nivel
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }

    /**
     * @return mixed
     */
    public function getIdAluno()
    {
        return $this->idAluno;
    }

    /**
     * @param mixed $idAluno
     */
    public function setIdAluno($idAluno)
    {
        $this->idAluno = $idAluno;
    }


}
