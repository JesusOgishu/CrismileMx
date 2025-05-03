<?php
include_once("../Models/Fotografia.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nueva = new Fotografia();
    $nueva->tipo = $_POST["tipo"];
    $nueva->descripcion = $_POST["descripcion"];
    $nueva->precio = $_POST["precio"];

    $resultado = $nueva->guardar();
    
    if ($resultado) {
        // Redirige de nuevo a la vista si se guarda correctamente
        header("Location: ../views/FotografiasView.php");
        exit;
    } else {
        // Si ocurre un error, puedes redirigir con mensaje o mostrar un error aquí
        header("Location: ../views/FotografiasView.php?error=1");
        exit;
    }
}
?>
