<?php

class Conexao{

	public static $conexao;

    public static function getConexao(){
        //projetoseduc.esy.es dominio
        $db = 'u199007155_sape';
        $user = 'u199007155_smeqx';
        $senha = 123465;

        if(Conexao::$conexao!=null){
        	try {
        		return Conexao::$conexao;	
        	} catch (Exception $e) {
        		return false;
        	}
        }
        else{
        	try {
            	return new PDO('mysql:host=mysql.hostinger.com.br;dbname=u199007155_sape', 'u199007155_smeqx',
                '123456', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        	} catch (Exception $e) {
        			return null;
        	}
        }
    }
}

