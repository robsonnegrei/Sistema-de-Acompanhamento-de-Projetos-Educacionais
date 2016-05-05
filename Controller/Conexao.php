<?php

class Conexao
{

	public static $conexao;

	public static function getConexao()
	{
		if (Conexao::$conexao != null) {
			try {
				return Conexao::$conexao;
			} catch (Exception $e) {
				return null;
			}
		} else {
			try {
				return new PDO('mysql:host=localhost;dbname=sape', 'root',
					'', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			} catch (Exception $e) {
				return null;
			}
		}
	}
}
	/* 	return new PDO('mysql:host=mysql.hostinger.com.br;dbname=u199007155_sape', 'u199007155_smeqx',
					'123456', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));*/

