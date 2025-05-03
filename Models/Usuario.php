¿<?php
class Usuario {
    var $id;
    var $nombre_usuario;
    var $email;
    var $contrasena;

    function guardar() {
        include_once("Conexion.php");
        $con = new Conexion();
        $conexion = $con->conectar();

        $query = "INSERT INTO usuario (nombre_usuario, email, contrasena) 
                  VALUES (:nombre_usuario, :email, :contrasena)";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(":nombre_usuario", $this->nombre_usuario);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":contrasena", $this->contrasena); // Considera usar hash para seguridad
        return $stmt->execute();
    }

    function loginUsuario($nombreUsuario, $inputPassword) {
        include_once("Conexion.php");
        $con = new Conexion();
        $conexion = $con->conectar();

        $query = "SELECT * FROM usuario WHERE nombre_usuario = :nombre";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(":nombre", $nombreUsuario);
        $stmt->execute();

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$usuario) {
            return array("status" => false, "error" => "Usuario incorrecto");
        } else if ($usuario["contrasena"] !== $inputPassword) {
            return array("status" => false, "error" => "Contraseña incorrecta");
        } else {
            return array("status" => true, "user" => $usuario);
        }
    }

    function obtenerTodos() {
        include_once("Conexion.php");
        $con = new Conexion();
        $conexion = $con->conectar();

        $query = "SELECT id, nombre_usuario, email FROM usuario";
        $stmt = $conexion->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function eliminar($id) {
        include_once("Conexion.php");
        $con = new Conexion();
        $conexion = $con->conectar();

        $query = "DELETE FROM usuario WHERE id = :id";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
?>
