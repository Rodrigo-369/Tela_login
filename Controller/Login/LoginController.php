<?php

namespace Controller\Login;

require_once("VerifyLoginController.php");
require_once("../../Models/SqlModel.php");

use Controller\Login\VerifyLoginController;
use Models\SqlModel;

class LoginController extends VerifyLoginController{

    public $user;
    public $pass;

    public function toCompare($user, $pass)
    {
        $this->exist($user, $pass);
        $this->user = $user;
        $this->pass = md5($pass);

        $m = new SqlModel();
        $m->getUser();

        $this->validateCompare($this->user, $this->pass, $m->getUser());
    }

    public function validateCompare($u, $p, $a)
    {
        if($u === $a["usuario"] AND $p === $a['senha']){
            header("location: ../../Views/Dash/Dashboard.php");        
        } else {
            header("location: ../../index.php");
        }
    } 

}

$x = new LoginController();
echo $x->toCompare($_POST["login"], $_POST["senha"]);