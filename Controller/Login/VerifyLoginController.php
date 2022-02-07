<?php

namespace Controller\Login;

class VerifyLoginController {

    public $usuario;
    public $senha;

    public function exist($user, $pass)
    {

        if(isset($user) && isset($pass)){
            $this->usuario = trim($user);
            $this->senha = trim($pass);
        } else {
            header("location: https://www.terra.com.br");        
        }

        return $this->emptyVoid($user, $pass);
        
    }


    public function emptyVoid($user, $pass)
    {
        if(empty($user) || empty($pass)){
            header("location: https://www.lancenet.com.br");
        }

        return $this->removeSpace($this->usuario = $user, $this->senha = $pass);
    }

    public function removeSpace($user, $pass)
    {
        $this->usuario = trim($user);
        $this->senha = trim($pass);

        return $this->usuario . $this->hash($this->senha);
    }

    public function hash($pass)
    {
        return $this->senha = md5($pass);
    } 

    // public function Session()
    // {
    //     // Implementar uma sessão
    // }

    // public function userLevel()
    // {
    //     // Implementar nível de usuário
    // }

    // public function exist($login, $pass)
    // {
    //     if(!isset($login) && !isset($pass)){
    //         header("location: https://www.terra.com.br");
    //     }

    //     $this->emptyVoid($login, $pass);
    // }

    // public function emptyVoid($login, $pass)
    // {
    //     if(empty($login) || empty($pass)){
    //         header("location: https://www.lancenet.com.br");
    //     }

    //     $this->hash($pass);

    //     return $this->usuario = $login;
    // }

    // public function toCompare()
    // {
    //     // Comparar a consulta
    // }
}