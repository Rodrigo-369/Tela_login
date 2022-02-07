<?php

namespace Models;

//require_once("Sql.php");
require_once("../../Database/Sql.php");

use Database\Sql;
//use Models\Sql;
use PDO;

class SqlModel extends Sql {

    public $data;

    public function getUser()
    {
        $s = $this->conn->prepare("SELECT * FROM Usuario WHERE usuario LIKE 'rodrigo'");
        $s->execute();
        $d = $s->fetchAll(PDO::FETCH_ASSOC);

        foreach($d as $k => $v){
            $this->data = $v;
        }

        return $this->data;
    }
}

// $x = new SqlModel();
// $x->getUser();
// print_r($x->getUser()["usuario"]);
