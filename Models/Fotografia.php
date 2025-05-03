<?php
class Fotografia {
    var $id;
    var $tipo;
    var $descripcion;
    var $precio;

    // Guardar fotografía en la base de datos
    function guardar() {
        include_once("../Models/Conexion.php");
        $con = new Conexion();
        $conexion = $con->conectar();
        $query = "INSERT INTO fotografia (tipo, descripcion, precio) VALUES ('$this->tipo', '$this->descripcion', '$this->precio');";
        $stmt = $conexion->prepare($query);
        return $stmt->execute();
    }

    // Obtener todas las fotografías (opcional)
    function obtenerTodas() {
        include_once("Conexion.php");
        $con = new Conexion();
        $conexion = $con->conectar();
        $query = "SELECT * FROM fotografia";
        $stmt = $conexion->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
