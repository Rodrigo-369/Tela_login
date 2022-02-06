<?php

namespace Database;

use PDO;

class Sql extends PDO {

    protected $conn;

    private function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=estudos", "root", "");
    }

}