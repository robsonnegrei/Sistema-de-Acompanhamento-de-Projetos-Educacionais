<?php
include_once '../Controller/Conexao.php';
include_once 'Usuario.php';
include_once 'Admin.php';


class UsuarioDAO{
	private $conexao;

	public function __construct(){
		try{
			$this->conexao = Conexao::getConexao();
		}catch(Exception $e){
			return -1;
		}
	}
	public function inserir(Usuario $usuario){
			$sql = "insert into usuario(email, senha,idRegional) values (?,?,?)";
			$a = $this->conexao->prepare($sql);
			$a->bindParam(1, $usuario->email);
			$a->bindParam(2, $usuario->senha);
            $a->bindParam(3,$usuario->idRegional);
			if(!$a->execute())
				return -1;
			return 1;
	}
	public function usuarioExiste($login, $senha){
			$lista = $this->getAllUsuarios();
			if($lista == -1) return false;
			foreach ($lista as $usuario) {
				if($usuario->email == $login){
					if($usuario->senha == $senha){
						return true;
					}
				}		
			}
		return false;
	}
	public function remover(Usuario $usuario){
			$sql = "delete from usuario where id = ? ";
			$a = $this->conexao->prepare($sql);
			$a->bindParam(1,$usuario->getId());
			if(!$a->execute())
				return -1;
			return 1;
	}
	public function editarUsuaio(Usuario $usuario){
			$sql = "update usuario set email = ?, senha = ?, idRegional = ? where id= ?";
			$a = $this->conexao->prepare($sql);
			$a->bindParam(1,$usuario->email);
			$a->bindParam(2,$usuario->senha);
			$a->bindParam(3,$usuario->idRegional);
            $a->bindParam(4,$usuario->id);
			if(!$a->execute())
				return -1;
			return 1;
	}
	public function getUsuario(Usuario $usuario){
			$sql = "select * from usuario where id = ?";
			$a = $this->conexao->prepare($sql);
			$a->bindParam(1,$usuario->id);
			if(!$a->execute())
				return -1;
			return $a->fetchObject();
	}
	public function getAllUsuarios(){
			$sql = "select * from usuario";
			$resultado = $this->conexao->query($sql);
			if(!isset($resultado))
				return -1;
			$usuarios = array();
            foreach ($resultado as $value) {
				$usuario = new Usuario();
				$usuario->id = $value['id'];
				$usuario->idRegional = $value['idRegional'];             	
				$usuario->email = $value['email'];
				$usuario->senha = $value['senha'];
				array_push($usuarios, $usuario);
             }
            return $usuarios;
	}
	public function getAllAdmin(){
			$sql = "select * from admin";
			$resultado = $this->conexao->query($sql);
			if(!isset($resultado))
				return -1;
			$admins = array();
            foreach ($resultado as $value) {
				$admin = new Admin();
				$admin->id = $value['idAdmin'];
				$admin->email = $value['email'];
				$admin->senha = $value['senha'];

				array_push($admins, $admin);
             }
            return $admins;
	}
	public function isAdmin($login, $senha){
			$userDAO = new UsuarioDAO();
			$lista = $userDAO->getAllAdmin();
			if(!isset($lista))
				return false;
			foreach ($lista as $admin) {
				if($admin->email == $login){
					if($admin->senha == $senha){
						return true;
					}
				}
			}
			return false;
	}
}

?>