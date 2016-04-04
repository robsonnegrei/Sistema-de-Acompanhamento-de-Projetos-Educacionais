<?php 
class Aluno{
	public $nome;
	public $idTurma;
	public $idAluno;
    public $nivel;


    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getIdTurma()
    {
        return $this->idTurma;
    }

    public function setIdTurma($idTurma)
    {
        $this->idTurma = $idTurma;
    }

    public function getIdAluno()
    {
        return $this->idAluno;
    }

    public function setIdAluno($idAluno)
    {
        $this->idAluno = $idAluno;
    }

}