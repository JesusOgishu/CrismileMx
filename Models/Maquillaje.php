<?php
class Maquillaje {
    var $id;
    var $tipo;
    var $descripcion;
    var $precio;

    function guardar() {
        include_once("Conexion.php");
        $con = new Conexion();
        $conexion = $con->conectar();

        $query = "INSERT INTO maquillaje (tipo, descripcion, precio) VALUES ('$this->tipo', '$this->descripcion', '$this->precio');";
        $stmt = $conexion->prepare($query);
        return $stmt->execute();
    }

    function obtenerTodos() {
        include_once("Conexion.php");
        $con = new Conexion();
        $conexion = $con->conectar();

        $query = "SELECT * FROM maquillaje;";
        $stmt = $conexion->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
