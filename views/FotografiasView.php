<?php
include_once("../Models/Fotografia.php");

// Obtener todas las fotografías
$fotografia = new Fotografia();
$fotografias = $fotografia->obtenerTodas();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Fotografía</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">

    <!-- Botón de regreso -->
    <div class="d-flex justify-content-end mb-3">
        <a href="AdminView.php" class="btn btn-secondary">← Regresar al Panel</a>
    </div>

    <h1 class="text-center mb-4">Fotografías Registradas</h1>

    <!-- Mostrar error si hay -->
    <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger text-center">Error al guardar fotografía</div>
    <?php endif; ?>

    <!-- Tabla de fotografías -->
    <div class="table-responsive mb-5">
        <table class="table table-bordered table-striped shadow-sm">
            <thead class="table-header text-white bg-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($fotografias as $item): ?>
                    <tr>
                        <td><?= $item["id"] ?></td>
                        <td><?= htmlspecialchars($item["tipo"]) ?></td>
                        <td><?= htmlspecialchars($item["descripcion"]) ?></td>
                        <td>$<?= number_format($item["precio"], 2) ?></td>
                        <td class="text-center">
                            <form action="../Controllers/FotografiaController.php" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta fotografía?');" style="display:inline;">
                                <input type="hidden" name="id_eliminar" value="<?= $item['id'] ?>">
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php if (count($fotografias) === 0): ?>
                    <tr>
                        <td colspan="5" class="text-center">No hay fotografías registradas</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Formulario para agregar fotografía -->
    <h2 class="mb-4">Agregar nueva fotografía</h2>
    <form method="POST" action="../Controllers/FotografiaController.php" class="p-4 border rounded bg-white shadow">
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <input type="text" name="tipo" id="tipo" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" step="0.01" name="precio" id="precio" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-dark text-white">Agregar Fotografía</button>
    </form>
</div>

</body>
</html>
