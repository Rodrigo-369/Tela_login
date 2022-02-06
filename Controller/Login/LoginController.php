<?php

namespace Controller\Login;

class LoginController {

    public $usuario;
    public $senha;

    public function receiveData($l, $s){

        return $this->usuario = $l . $this->senha = $s;

    }

}

$a = 

$x = new LoginController();
echo $x->receiveData($_POST["login"], $_POST["senha"]);