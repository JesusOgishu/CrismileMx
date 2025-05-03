<?php
include_once("../Models/Maquillaje.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $maquillaje = new Maquillaje();

    // Verificar si es una solicitud de eliminación
    if (isset($_POST['id_eliminar'])) {
        $id = $_POST['id_eliminar'];
        $resultado = $maquillaje->eliminar($id);

        // Redirigir de vuelta a la vista
        header("Location: ../views/MaquillajeView.php");
        exit;
    }

    // Si no es eliminación, intentamos guardar un nuevo registro
    if (isset($_POST["tipo"], $_POST["descripcion"], $_POST["precio"])) {
        $maquillaje->tipo = $_POST["tipo"];
        $maquillaje->descripcion = $_POST["descripcion"];
        $maquillaje->precio = $_POST["precio"];

        $resultado = $maquillaje->guardar();

        if ($resultado) {
            header("Location: ../views/MaquillajeView.php");
            exit;
        } else {
            header("Location: ../views/MaquillajeView.php?error=1");
            exit;
        }
    }
}
