<?php
  session_start(); // Inicia la sesión en caso de que aún no se haya iniciado
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CrismileMx</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <style>
      html {
        scroll-behavior: smooth;
      }
    </style>
  </head>
  <body>
    <!-- Encabezado principal -->
    <div class="header">
      <div class="container">
        <div class="row">
          <div class="col text-start">
            <a href="WelcomeFileLogueado.php" class="btn btn-primary btn-sm btn-brand">
              CrismileMx
            </a>
          </div>
          <div class="col text-end">
            <?php
              // Verifica si el usuario está autenticado.
              if (isset($_SESSION["usuario"])) {
                echo "<span style='font-weight: bold; font-size: 1.4rem'>Hola, " . htmlspecialchars($_SESSION["usuario"]["nombre_usuario"]) . "</span>";
              } else {
                echo '<a href="Login.php" class="btn btn-primary btn-sm btn-secondary-custom">Inicia Sesion</a>';
              }
            ?>
            
          </div>
        </div>
        <div class="row">ㅤ</div>
        <div class="row text-start">
          <div class="col">
            <h1 id="main-title">¿Necesitas trabajos de fotografía?</h1>
            <h3>Contamos con todo tipo de fotografías...</h3>
          </div>
        </div>
        <div class="row">ㅤ</div>
      </div>
    </div>

    <!-- Contenido principal -->
    <div class="fondo-imagen">
      <div class="container">
        <!-- Navbar -->
        <div class="row">
          <nav class="navbar navbar-expand-lg custom-navbar">
            <div class="container-fluid">
              <a class="navbar-brand" href="#fotografia">Fotografía</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                      aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" href="#maquillaje">Maquillaje</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
              </div>
            </div>
          </nav>
        </div>

        <!-- Tabla informativa -->
        <div class="container mt-4">
          <table class="table custom-table">
            <thead>
              <tr>
                <th scope="col" class="text-center fs-2 table-header">Crismile Studio</th>
                <th scope="col" class="text-center fs-2 table-header">Misión</th>
                <th scope="col" class="text-center fs-2 table-header">Nuestros Servicios</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-justify table-body-text">
                  Es una comprometida empresa con la aplicación del arte clásico y contemporáneo, dejando una huella única en cada persona. Se crea desde un concepto hasta la representación del mismo.
                </td>
                <td class="text-justify table-body-text">
                  Crear experiencias únicas a través del arte clásico y contemporáneo, desde la idea hasta su realización.
                </td>
                <td class="text-justify table-body-text">
                  Nos especializamos en la captura fotográfica, producción de sets, grabación de videos, edición de imágenes, así como en servicios de maquillaje y peinado.
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Sección Fotografía -->
        <div class="row text-start" id="fotografia">
          <div class="col">
            <h3 class="section-heading">Toma de fotografías</h3>
            <p>Diferentes tipos de fotografías a su necesidad</p>
            <hr>
          </div>
        </div>

        <!-- Galería Fotografía -->
        <div class="item1">
          <div class="div-imagen">
            <a href="FotografiasUsuario.php" class="img-link">
              <img src="../imagenes/xv.jpg" class="img-thumbnail img img-fluid desvanecer"> 
            </a>
            <div class="texto-inferior">Ver más información acerca de Fotos</div>
          </div>
          <div class="div-imagen">
            <a href="FotografiasUsuario.php" class="img-link">
              <img src="../imagenes/boda.jpeg" class="img-thumbnail img img-fluid desvanecer">
            </a>
            <div class="texto-inferior">Ver más información acerca de Fotos</div>
          </div>
        </div>

        <!-- Sección Maquillaje -->
        <div class="row text-start" id="maquillaje">
          <div class="col">
            <h3 class="section-heading">Maquillaje</h3>
            <p>Escoja un tipo de maquillaje depende a la ocasión</p>
            <hr>
          </div>
        </div>

        <!-- Galería Maquillaje -->
        <div class="item1">
          <div class="div-imagen">
            <a href="MaquillajesUsuario.php" class="img-link">
              <img src="../imagenes/maquillaje2.jpg" style="max-width: auto; height: 400px;" class="img-thumbnail img img-fluid desvanecer"> 
            </a>
            <div class="texto-inferior">Ver más información acerca de Maquillaje.</div>
          </div>
          <div class="div-imagen">
            <a href="MaquillajesUsuario.php" class="img-link">
              <img src="../imagenes/maquillaje1.jpeg" style="max-width: auto; height: 400px;" class="img-thumbnail img img-fluid desvanecer">
            </a>
            <div class="texto-inferior">Ver más información acerca de Maquillaje.</div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
            crossorigin="anonymous"></script>
  </body>
</html>
