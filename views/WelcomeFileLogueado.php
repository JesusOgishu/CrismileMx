<!doctype html>
<html lang = "en">
    <style>
        ti{
            font-size: 70px;
        }
        .custom-navbar {
            background-color: white !important;
            border: 1px solid black;
            border-radius:15px;
            padding:10px;
            
        }
        .fondo-imagen {
            background-image: url('../imagenes/fondo.png');
            background-size: cover;         
            background-position: center;    
            background-repeat: no-repeat;   
            width: 100%;
            height: 65px;                  
        }
        
        img {
            width: 350px;
            height: auto;
        }
        .img-large {
            width: 600px;
            height: auto;
        }

    </style>
     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <Title>CrismileMx</Title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div style="background-color: palevioletred; color: white; padding: 1%; text-align: center; font-size: 2rem;">
            <div class="container">
                <div class="row">
                    <div class="col" style="text-align: left">
                         CrismileMx
                    </div>
                    <div class="col" style="text-align: right">
                        <a href="#nuestros-servicios" class="btn btn-primary btn-sm" style="background-color: palevioletred; color: black; border-color: palevioletred;">
                            Nuestros Servicios
                        </a>
                        <a href="Register.php" class="btn btn-primary btn-sm" style="background-color: white; color: palevioletred; border-color: palevioletred;">
                            Quienes Somos?
                        </a>

                        <a href="Login.php" class="btn btn-primary btn-sm" style="background-color: white; color: palevioletred; border-color: palevioletred;">
                            Contactanos!
                        </a>
                        <a href="WelcomeFileLogueado.php" style="color: white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house-dash" viewBox="0 0 16 16">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M11 12h3a.5.5 0 0 1 0 1h-3a.5.5 0 1 1 0-1"/>
                                <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207l-5 5V13.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 2 13.5V8.207l-.646.647a.5.5 0 1 1-.708-.708z"/>
                            </svg>
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
            <div class="container text-center">
                <div class="row ">
                    <div class="col">
                        <img src="../imagenes/xv.jpg" class="img-thumbnail img img-fluid"> <br>
                        <h3 style="padding-top:10px;">Fotos para XV años</h3>
                    </div>
                    <div class="col">
                        <img src="../imagenes/boda.jpeg" class="img-thumbnail img img-fluid"> <br>
                        <h3 style="padding-top:10px;">Fotos para bodas</h3>
                    </div>
                    <div class="col">
                        <img src="../imagenes/bautiza.jpg" class="img-thumbnail img img-fluid"> <br>
                        <h3 style="padding-top:10px;">Fotos para bautizos</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="../imagenes/evento.jpeg" class="img-thumbnail img-large img-fluid"> <br>
                        <h3 style="padding-top:10px;">Fotos para eventos</h3>
                    </div>
                    <div class="col">
                        <img src="../imagenes/graduar.jpg" class="img-thumbnail img-large img-fluid"> <br>
                        <h3 style="padding-top:10px;">Fotos para Graduaciones</h3>
                    </div>
                </div>
            </div>
            <div class="container" style="background-color: palevioletred; border-radius: 15px;">
                asdddddddddddd
            </div>
        </div>
        
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>