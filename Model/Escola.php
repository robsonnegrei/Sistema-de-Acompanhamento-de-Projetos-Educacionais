<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 20/01/16
 * Time: 19:53
 */
class Escola{
    public $idEscola;
    public $idRegional;
    public $nome;

    /**
     * Escola constructor.
     * @param $idEscola
     * @param $idRegional
     * @param $nome
     */
    public function __construct($idEscola, $idRegional, $nome)
    {
        $this->idEscola = $idEscola;
        $this->idRegional = $idRegional;
        $this->nome = $nome;
    }

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
    public function getIdRegional()
    {
        return $this->idRegional;
    }

    /**
     * @param mixed $idRegional
     */
    public function setIdRegional($idRegional)
    {
        $this->idRegional = $idRegional;
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