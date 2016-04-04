<?php 

class Admin{
	public $email;
	public $senha;
	public $id;

	/**
	 * @return mixed
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * @param mixed $email
	 */
	public function setEmail($email)
	{
		$this->email = $email;
	}

	/**
	 * @return mixed
	 */
	public function getSenha()
	{
		return $this->senha;
	}

	/**
	 * @param mixed $senha
	 */
	public function setSenha($senha)
	{
		$this->senha = $senha;
	}

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}
}

?>