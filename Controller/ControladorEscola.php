<?php
include_once'Conexao.php';
include_once'../Model/EscolaDAO.php';

class ControladorEscola
{
    private $dao;

    public function __construct()
    {
        $conexao = new EscolaDAO(Conexao::getConexao());
        if (is_bool($conexao))
            throw new Exception();
        $this->dao = $conexao;
    }

    public static function getInstance()
    {
        return new ControladorEscola();
    }

    public function cadastrarEscola($nome, $idRegional)
    {
        try {
            if (isset($nome, $idRegional)) {
                $escola = new Escola();
                $escola->setNome($nome);
                $escola->setIdRegional($idRegional);
                return $this->dao->inserir($escola);
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function removerEscola($idEscola)
    {
        try {
            if (isset($idEscola)) {
                $escola = new Escola();
                $escola->setIdEscola($idEscola);
                return $this->dao->remover($escola);
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function editarEscola($idEscola, $nome)
    {
        try {
            if (isset($nome, $idEscola)) {
                $escola = new Escola();
                $escola->setNome($nome);
                $escola->setIdEscola($idEscola);
                return $this->dao->editarEscola($escola);
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function buscarEscola($idEscola)
    {
        try {
            if (isset($idEscola)) {
                return $this->dao->getEscola($idEscola);
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function buscarEscolaPorRegional($idRegional)
    {
        try {
            if (isset($idRegional)) {
                return $this->dao->getEscolasRegional($idRegional);
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function buscarEscolas()
    {
        try {
            return $this->dao->getAllEscolas();
        } catch (Exception $e) {
            throw $e;
        }
    }
}
?>