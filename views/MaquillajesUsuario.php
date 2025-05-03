<?php
include_once("../Models/Maquillaje.php");

$maquillaje = new Maquillaje();
$productos = $maquillaje->obtenerTodos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Maquillajes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .header-color {
            background-color: palevioletred;
            color: white;
        }
        .btn-volver {
            background-color: palevioletred;
            color: white;
            border: none;
        }
        .btn-volver:hover {
            background-color: #d87093;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <!-- Botón de regreso -->
    <div class="mb-4 text-end">
        <a href="WelcomeFileLogueado.php" class="btn btn-volver">← Volver</a>
    </div>

    <h1 class="text-center mb-5 header-color p-3 rounded">Catálogo de Maquillajes</h1>

    <div class="row g-4">
        <?php foreach ($productos as $item): ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title text-center text-uppercase" style="color: palevioletred;">
                            <?= htmlspecialchars($item["tipo"]) ?>
                        </h5>
                        <p class="card-text text-muted"><?= htmlspecialchars($item["descripcion"]) ?></p>
                    </div>
                    <div class="card-footer bg-transparent text-center">
                        <span class="fw-bold" style="color: palevioletred;">$<?= number_format($item["precio"], 2) ?></span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <?php if (count($productos) === 0): ?>
            <div class="col-12">
                <div class="alert alert-info text-center">No hay maquillajes registrados.</div>
            </div>
        <?php endif; ?>
    </div>

</div>

</body>
</html>
