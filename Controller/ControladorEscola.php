<?php
include_once'Conexao.php';
include_once'../Model/EscolaDAO.php';

class ControladorEscola
{
    private $dao;
    public function __construct(){
        $conexao = new EscolaDAO(Conexao::getConexao());
        if (is_bool($conexao))
            return -1;
        $this->dao = $conexao;
    }
    public static function getInstance(){
        return new ControladorEscola();
    }
    public function cadastrarEscola($nome, $idRegional){
        if (isset($nome, $idRegional)) {
            $escola = new Escola();
            $escola->setNome($nome);
            $escola->setIdRegional($idRegional);
            return $this->dao->inserir($escola);
        }
    }
    public function removerEscola($idEscola){
        if (isset($idEscola)) {
            $escola = new Escola();
            $escola->setIdEscola($idEscola);
            return $this->dao->remover($escola);
        }

    }
    public function editarEscola($idEscola, $nome){
        if (isset($nome, $idEscola)) {
                $escola = new Escola();
                $escola->setNome($nome);
                $escola->setIdEscola($idEscola);
                return $this->dao->editarEscola($escola);
        }
    }
    public function buscarEscola($idEscola){
        if (isset($idEscola)) {
            return $this->dao->getEscola($idEscola);
        }
    }
    public function buscarEscolaPorRegional($idRegional){
        if (isset($idRegional)) {
            return $this->dao->getEscolasRegional($idRegional);
        }
    }
    public function buscarEscolas(){
        return $this->dao->getAllEscolas();
    }
}
?>