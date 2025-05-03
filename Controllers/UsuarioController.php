<?php
include_once("../Models/Usuario.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accion = $_POST["accion"] ?? "";

    if ($accion === "guardar") {
        $nuevo = new Usuario();
        $nuevo->nombre_usuario = $_POST["nombre_usuario"];
        $nuevo->email = $_POST["email"];
        $nuevo->contrasena = $_POST["contrasena"]; // Puedes usar hash si deseas seguridad

        $resultado = $nuevo->guardar();

        if ($resultado) {
            header("Location: ../views/UsuariosView.php?guardado=true");
        } else {
            header("Location: ../views/UsuariosView.php?error=1");
        }
        exit;

    } elseif ($accion === "eliminar") {
        $usuario = new Usuario();
        $resultado = $usuario->eliminar($_POST["id"]);

        if ($resultado) {
            header("Location: ../views/UsuariosView.php?eliminado=true");
        } else {
            header("Location: ../views/UsuariosView.php?error=1");
        }
        exit;
    }
}
?>
