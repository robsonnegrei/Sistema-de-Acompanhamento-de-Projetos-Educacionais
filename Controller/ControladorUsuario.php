<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 21/01/16
 * Time: 03:25
 */
include_once '../Model/AlunoDAO.php';
include_once '../Model/UsuarioDAO.php';
include_once 'Conexao.php';

if(isset($_POST['acao'])) {
    $acao = $_POST['acao'];
    if ($acao == "cadastrar") {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confirmacaoSenha = $_POST['confirmar'];
        $idRegional = $_POST['idRegional'];
        if ($senha == $confirmacaoSenha) {
            $c = new ControladorUsuario();
            if ($c->cadastrarUsuario($email, $senha, $idRegional) == -1)
                header('location:../admin/cadastro-usuario.php');
            header('location:../admin/index.php');
        }
    }else if ($acao == "editar") {
            $idRegional = $_POST['idRegional'];
            $id = $_POST['id'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $c = new ControladorUsuario();
            if ($c->editar($email, $senha, $idRegional, $id) == -1) {
                //MostrarErro
            }
            header('location:../admin/regional.php?id_regional_selec='.$idRegional);
        }
}
if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
    if ($acao == "excluir") {
        $id = $_GET['id'];
        $c = new ControladorUsuario();
        if ($c->removerUsuario($id) == -1){
            //MostrarErro
        }
        header('location:../admin/index.php');
    }

}

    class ControladorUsuario{
        private $dao;

        public function __construct()
        {
            $conexao = new UsuarioDAO(Conexao::getConexao());
            if (is_bool($conexao))
                return -1;
            $this->dao = $conexao;
        }

        public static function getInstance()
        {
            return new ControladorUsuario();
        }

        public function cadastrarUsuario($email, $senha, $idRegional)
        {
            if (isset($email, $senha, $idRegional)) {
                $usuario = new Usuario();
                $usuario->setEmail($email);
                $usuario->setSenha($senha);
                $usuario->setIdRegional($idRegional);
                return $this->dao->inserir($usuario);
            }
        }

        public function removerUsuario($id)
        {
            if (isset($id)) {
                $usuario = new Usuario();
                $usuario->id = $id;
                return $this->dao->remover($usuario);
            }
        }

        public function editar($email, $senha, $idRegional, $id)
        {
            if (isset($email, $senha, $idRegional, $id)) {
                $usuario = new Usuario();
                $usuario->email = $email;
                $usuario->senha =$senha;
                $usuario->idRegional = $idRegional;
                $usuario->id = $id;
                return $this->dao->editarUsuaio($usuario);
            }

        }

        public function buscarUsuario($id)
        {
            if (isset($id)) {
                $usuario = new Usuario();
                $usuario->id = $id;
                return $this->dao->getUsuario($usuario);
            }
        }

        public function buscarAllUsuario()
        {
            return $this->dao->getAllUsuarios();
        }
    }
?>