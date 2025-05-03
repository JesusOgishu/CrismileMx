<?php
include_once("../Models/Maquillaje.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nuevo = new Maquillaje();
    $nuevo->tipo = $_POST["tipo"];
    $nuevo->descripcion = $_POST["descripcion"];
    $nuevo->precio = $_POST["precio"];

    $resultado = $nuevo->guardar();
    
    if ($resultado) {
        // Redirige a la vista si se guarda correctamente
        header("Location: ../views/MaquillajeView.php");
        exit;
    } else {
        // Redirige a la vista con un mensaje de error si falla
        header("Location: ../views/MaquillajeView.php?error=1");
        exit;
    }
}
?>
