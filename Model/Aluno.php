<?php 
class Aluno{
	public $nome_aluno;
	public $idTurma;
	public $idAluno;
    public $nivel;


    public function getNome()
    {
        return $this->nome_aluno;
    }

    public function setNome($nome)
    {
        $this->nome_aluno = $nome;
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