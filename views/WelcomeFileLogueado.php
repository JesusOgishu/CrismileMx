<?php
    session_start(); // Inicia la sesión en caso de que aún no se haya iniciado
?>
<!doctype html>
<html lang = "en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <Title>CrismileMx</Title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div style="background-color: palevioletred; color: white; padding: 1%; text-align: center; font-size: 2rem;">
            <div class="container">
                <div class="row">
                    <div class="col" style="text-align: left">
                        <a href="WelcomeFileLogueado.php" class="btn btn-primary btn-sm" style="background-color: palevioletred; color: white; border-color: palevioletred; font-size: 2rem">
                            CrismileMx
                        </a>
                    </div>
                    <div class="col" style="text-align: right">
                        
                        <?php
                        // Verifica si el usuario está autenticado.
                        if (isset($_SESSION["usuario"])) {
                            echo "<span style='font-weight: bold; font-size: 1.4rem'>Hola, " . htmlspecialchars($_SESSION["usuario"]["nombre_usuario"]) . "</span>";
                        } else {
                            echo '<a href="Login.php" class="btn btn-primary btn-sm" style="background-color: white; color: palevioletred; border-color: palevioletred;">Inicia Sesion</a>';
                        }
                        ?>
                        <a href="Register.php" class="btn btn-primary btn-sm" style="background-color: white; color: palevioletred; border-color: palevioletred;">
                            Agendar un servicio
                        </a>

                    </div>
                </div>
                <div class="row">ㅤ</div>
                <div class="row" style="text-align: left">
                    <div class="col" >
                        <ti>¿Necesitas trabajos de fotografia?</ti>
                        <h3>Contamos con todo tipo de fotografias...</h3>
                    </div>
                </div>
                <div class="row">ㅤ</div>
            </div>
        </div>
        <div class="fondo-imagen">
            <div class="container" >
                <div class="row">
                    <nav class="navbar navbar-expand-lg custom-navbar">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">Navbar</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                    </li>
                                </ul>
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="row" style="text-align: left" id="nuestros-servicios">
                    <div class="col" >
                        <h3 style="padding-top: 20px;">Nuestros servicios</h3>
                        <p>Diferentes tipos de fotografias a su necesidad</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="item1" style="text-align: center;">

                    <div class="div-imagen">
                        <a href="xv.html" style="text-decoration: none; color: inherit; position: relative; display: inline-block;">
                            <img src="../imagenes/xv.jpg" class="img-thumbnail img img-fluid desvanecer"> 
                        </a>
                        <div class="texto-inferior" >Ver más información acerca de Fotos de quinceañeras</div>
                    </div>

                    <div class="div-imagen">
                        <a href="boda.html" style="text-decoration: none; color: inherit; position: relative; display: inline-block;">
                            <img src="../imagenes/boda.jpeg" class="img-thumbnail img img-fluid desvanecer">
                        </a>
                        <div class="texto-inferior">Ver más información acerca de Fotos de bodas</div>
                    </div>

                    <div class="div-imagen">
                        <a href="bautizo.html" style="text-decoration: none; color: inherit; position: relative; display: inline-block;">
                            <img src="../imagenes/bautiza.jpg" class="img-thumbnail img img-fluid desvanecer">
                        </a>
                        <div class="texto-inferior">Ver más información acerca de Fotos de bautizos</div>
                    </div>

                    <div class="div-imagen">
                        <a href="evento.html" style="text-decoration: none; color: inherit; position: relative; display: inline-block;">
                            <img src="../imagenes/evento.jpeg" class="img-thumbnail img-large img-fluid desvanecer">
                        </a>
                        <div class="texto-inferior">Ver más información acerca de Fotos de eventos</div>
                    </div>

                    <div class="div-imagen">
                        <a href="graduacion.html" style="text-decoration: none; color: inherit; position: relative; display: inline-block;">
                            <img src="../imagenes/graduar.jpg" class="img-thumbnail img-large img-fluid desvanecer">
                        </a>
                        <div class="texto-inferior">Ver más información acerca de Fotos de graduaciones</div>
                    </div>
                    <div class="div-imagen">
                        <a href="madres.html" style="text-decoration: none; color: inherit; position: relative; display: inline-block;">
                            <img src="../imagenes/sesionMadres.jpeg" class="img-thumbnail img-large img-fluid desvanecer">
                        </a>
                        <div class="texto-inferior">Ver más información acerca de Fotos del dia de las madres</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>