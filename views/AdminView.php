<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Vista de Administrador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tu archivo CSS -->
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body class="bg-light">

    <!-- Encabezado -->
    <div class="header position-relative">
        <h1 id="main-title" style="padding:40px">Bienvenido Administrador</h1>

        <!-- Botón cerrar sesión -->
        <a href="WelcomeFile.php" class="btn btn-secondary position-absolute top-0 end-0 m-3">
            Cerrar Sesión
        </a>
    </div>

    <!-- Contenido principal -->
    <div class="container text-center mt-5">
        <div class="contenido p-5 shadow-lg">

            <h2 class="mb-4">Panel de Control</h2>

            <div class="d-grid gap-4 col-6 mx-auto">
                <a href="UsuariosView.php" class="btn btn-custom btn-lg">Ver Usuarios</a>
                <a href="FotografiasView.php" class="btn btn-custom btn-lg">Añadir Fotografías</a>
                <a href="MaquillajeView.php" class="btn btn-custom btn-lg">Añadir Maquillajes</a>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS (opcional, para componentes interactivos) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
