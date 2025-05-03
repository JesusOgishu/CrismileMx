<?php
include_once("../Models/Fotografia.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $foto = new Fotografia();

    if (isset($_POST['id_eliminar'])) {
        // Eliminar fotografía
        $foto->eliminar($_POST['id_eliminar']);
        header("Location: ../views/FotografiasView.php");
        exit;
    }

    // Guardar nueva fotografía
    $foto->tipo = $_POST["tipo"];
    $foto->descripcion = $_POST["descripcion"];
    $foto->precio = $_POST["precio"];

    $resultado = $foto->guardar();
    
    if ($resultado) {
        header("Location: ../views/FotografiasView.php");
        exit;
    } else {
        header("Location: ../views/FotografiasView.php?error=1");
        exit;
    }
}
