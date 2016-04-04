<?php

/**
 * Created by PhpStorm.
 * User: Ronson Cavalcante
 * Date: 28/03/2016
 * Time: 19:31
 */
class NãoExisteAlunoException extends Exception{
    public function errorMessage(){
              //Mensagem de erro
        $errorMsg = 'Erro na linha '.$this->getLine()
               .' em '.$this->getFile()
               .': <b>'.$this->getMessage()
               .'</b>Nao existe aluno';
           return $errorMsg;
      }
}