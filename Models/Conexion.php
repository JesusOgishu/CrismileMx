<?php

class Conexion{
    var $conn = null;
    
    function conectar(){
        $host= "localhost";
        $db = "bd_crismile_mx";
        $usuario = "root";
        $pwd = "";
        $dsn = "mysql:host=$host;dbname=$db;charset=utf8";
        $pdo = new PDO($dsn,$usuario,$pwd);
        $this->conn = $pdo;
        return $this->conn;

    }
}

?>