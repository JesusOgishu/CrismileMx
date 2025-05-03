<?php
include_once("../Models/Usuario.php");
$usuario = new Usuario();
$usuarios = $usuario->obtenerTodos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios Registrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-4">

    <div class="d-flex justify-content-end mb-3">
        <a href="AdminView.php" class="btn btn-secondary">← Regresar al Panel</a>
    </div>

    <h1 class="text-center mb-4">Usuarios Registrados</h1>

    <?php if (isset($_GET['eliminado'])): ?>
        <div class="alert alert-warning text-center">Usuario eliminado correctamente.</div>
    <?php elseif (isset($_GET['error'])): ?>
        <div class="alert alert-danger text-center">Ocurrió un error al procesar la solicitud.</div>
    <?php endif; ?>

    <!-- Tabla de usuarios -->
    <div class="table-responsive mb-5">
        <table class="table table-bordered table-striped shadow-sm text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre de Usuario</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $u): ?>
                    <tr>
                        <td><?= $u["id"] ?></td>
                        <td><?= htmlspecialchars($u["nombre_usuario"]) ?></td>
                        <td><?= htmlspecialchars($u["email"]) ?></td>
                        <td>
                            <form method="POST" action="../Controllers/UsuarioController.php" onsubmit="return confirm('¿Estás seguro de eliminar este usuario?');">
                                <input type="hidden" name="accion" value="eliminar">
                                <input type="hidden" name="id" value="<?= $u["id"] ?>">
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php if (count($usuarios) === 0): ?>
                    <tr><td colspan="4">No hay usuarios registrados.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</div>
</body>
</html>
