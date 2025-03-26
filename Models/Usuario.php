<?php
    Class Usuario{
        var $id;
        var $nombre_usuario;
        var $email;
        var $contrasena;

        function guardar(){
            include_once("../Models/Conexion.php");
            $con=new Conexion();
            $conexion=$con->conectar();
            $query= "INSERT INTO usuario (nombre_usuario,email,contrasena) values('$this->nombre_usuario','$this->email','$this->contrasena');";
            $stmt=$conexion->prepare($query);
            return $stmt->execute();
        }
        // Función para validar el login
        function loginUsuario($nombreUsuario, $inputPassword) {
            include_once("Conexion.php");
            $con = new Conexion();
            $conexion = $con->conectar();
        
            // Se obtiene todos los registros de usuario
            $query = "SELECT * FROM usuario";
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $foundUser = null;
            // Iteramos para encontrar el usuario que coincide con el nombre ingresado
            foreach($usuarios as $usuario) {
                if($usuario['nombre_usuario'] === $nombreUsuario) {
                    $foundUser = $usuario;
                    break;
                }
            }
        
            // Si no se encontró el usuario
            if ($foundUser == null) {
                return array("status" => false, "error" => "Usuario incorrecto");
            } else {
                // Si el usuario existe, se compara la contraseña
                if($foundUser['contrasena'] !== $inputPassword) {
                    return array("status" => false, "error" => "Contraseña incorrecta");
                } else {
                    return array("status" => true, "user" => $foundUser);
                }
            }
        }
    }
?>