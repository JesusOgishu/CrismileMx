<?php
    if (empty($_POST["nombreUsuario"]) || empty($_POST["InputEmail"]) || empty($_POST["InputPassword"])) {
        header("Location: ../views/Register.php?error=Complete+los+campos+correctamente");
        exit;
    }

    $nombreUsuario = $_POST["nombreUsuario"];
    $email = $_POST["InputEmail"];
    $passwordUsuario = $_POST["InputPassword"];

    include_once("../Models/Usuario.php");
    
    $usuario = new Usuario();
    $usuario->nombre_usuario = $nombreUsuario;
    $usuario->email = $email;
    $usuario->contrasena = $passwordUsuario;

    if($usuario->guardar() == 1){
        header("location: ../views/WelcomeFile.php");
     }else{
        echo "Error al guardar, comunicarse con sistemas, gracias.";
    }
?>

