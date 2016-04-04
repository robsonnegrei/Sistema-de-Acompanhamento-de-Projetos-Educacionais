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
			return false;
		}
	}


	//alterado
	public function inserir(Usuario $usuario){

		try {
			$sql = "insert into usuario(email, senha,idRegional) values (?,?,?)";

			$a = $this->conexao->prepare($sql);

			$a->bindParam(1, $usuario->email);
			$a->bindParam(2, $usuario->senha);
            $a->bindParam(3,$usuario->idRegional);

			return $a->execute();

		}catch (Exception $e) {
			return false;
		}
	}

	public function usuarioExiste($login, $senha){

		try{
			$lista = $this->getAllUsuarios();	
			foreach ($lista as $usuario) {
				if($usuario->email == $login){
					if($usuario->senha == $senha){
						return true;
					}
				}		
			}
		}catch(Exception $e){
			return false;
		}		

		return false;
	}


	//FEITO
	public function remover(Usuario $usuario){
		try{
			$sql = "delete from usuario where id = ? ";

			$a = $this->conexao->prepare($sql);

			$a->bindParam(1,$usuario->getId());

			return $a->execute();
		}catch(Exception $e){
			return false;
		}

	}
	public function editarUsuaio(Usuario $usuario){

		try{
			$sql = "update usuario set email = ?, senha = ?, idRegional = ? where id= ?";

			$a = $this->conexao->prepare($sql);
			$a->bindParam(1,$usuario->getEmail());
			$a->bindParam(2,$usuario->getSenha());
			$a->bindParam(3,$usuario->getIdRegional());
            $a->bindParam(4,$usuario->getId());

			return $a->execute();

		}catch(Exception $e){
			return false;
		}
	}
	public function getUsuario(Usuario $usuario){
		try{
			$sql = "select *from usuario where id = ?";
			$a = $this->conexao->prepare($sql);
			$a->bindParam(1,$usuario->getId());
			if(!$a->execute())
				return false;

			return $a->fetchObject();

		}catch(Exception $e){
			return false;
		}

	}



	public function getAllUsuarios(){
		try{

			$sql = "select * from usuario";

			$resultado = $this->conexao->query($sql);

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

		}catch(Exception $e){
			echo errorInfo();
		}
	}

	public function getAllAdmin(){
		try{

			$sql = "select * from admin";

			$resultado = $this->conexao->query($sql);

			$admins = array();

            foreach ($resultado as $value) {
				$admin = new Admin();
				$admin->id = $value['idAdmin'];
				$admin->email = $value['email'];
				$admin->senha = $value['senha'];

				array_push($admins, $admin);
             }


            return $admins;

		}catch(Exception $e){
			throw $e;
		}
	}
	public function isAdmin($login, $senha){
		try{
			$userDAO = new UsuarioDAO();
			$lista = $userDAO->getAllAdmin();
			foreach ($lista as $admin) {
				if($admin->email == $login){
					if($admin->senha == $senha){
						return true;
					}
				}
			}
		}catch(Exception $e){
			return false;
		}
		return false;


	}





}

?>