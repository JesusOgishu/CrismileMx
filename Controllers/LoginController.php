<?php
    session_start(); // Inicia la sesión en el login controller.
    if (isset($_POST['nombreUsuario']) && isset($_POST['InputPassword'])) {
        $nombreUsuario = $_POST['nombreUsuario'];
        $InputPassword = $_POST['InputPassword'];
        
        include_once("../Models/Usuario.php");
        $usuario = new Usuario();
        $resultado = $usuario->loginUsuario($nombreUsuario, $InputPassword);
        
        if ($resultado["status"] === true) {
            // Login exitoso: se guarda el usuario en la sesión y se redirige a la bienvenida.
            $_SESSION["usuario"] = $resultado["user"];
            header("Location: ../views/WelcomeFileLogueado.php");
            exit;
        } else {
            // Hubo error: redirigimos de vuelta al login con mensaje.
            $error = $resultado["error"];
            header("Location: ../views/Login.php?error=" . urlencode($error));
            exit;
        }
    } else {
        header("Location: ../views/Login.php?error=" . urlencode("Por favor ingresa tus datos"));
        exit;
    }
?>

