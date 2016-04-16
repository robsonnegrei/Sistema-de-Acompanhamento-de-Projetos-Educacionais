<?php

class Conexao{

	public static $conexao;

    public static function getConexao(){
        //projetoseduc.esy.es dominio 
        $db = 'u157842610_sme';
        $user = 'u157842610_root';
        $senha = 123456;
        if(Conexao::$conexao!=null){
        	try {
        		return Conexao::$conexao;	
        	} catch (Exception $e) {
        		return false;
        	}
        }
        else{
        	try {
            	return new PDO('mysql:host=localhost;dbname=sape', 'root',
                '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        	} catch (Exception $e) {
        			return null;
        	}
        }
    }
}

