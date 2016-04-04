<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 21/01/16
 * Time: 02:41
 */

class Regional{
    public $nome;
    public $idRegional;

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


}