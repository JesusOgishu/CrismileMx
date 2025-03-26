<!doctype html>
<html lang = "en">
    <style>
        ti{
            font-size: 70px;
        }
        .custom-navbar {
            background-color: white !important;
            border: 2px solid black;
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
                        <a href="Register.php" class="btn btn-primary btn-sm" style="background-color: white; color: palevioletred; border-color: palevioletred;">
                            Hazte una cuenta
                        </a>
                        <a href="Login.php" class="btn btn-primary btn-sm" style="background-color: white; color: palevioletred; border-color: palevioletred;">
                            Inicia Sesion
                        </a>
                        <a href="WelcomeFile.php" style="color: white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house-dash" viewBox="0 0 16 16">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M11 12h3a.5.5 0 0 1 0 1h-3a.5.5 0 1 1 0-1"/>
                                <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207l-5 5V13.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 2 13.5V8.207l-.646.647a.5.5 0 1 1-.708-.708z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 40px;">
            <h2>Regístrate para iniciar sesión</h2>
            <?php
            // Muestra el error si existe en la URL
            if (isset($_GET["error"])) {
                echo "<p style='color: red; text-align: center;'>" . htmlspecialchars($_GET["error"]) . "</p>";
            }
            ?>
            <form style="margin-top: 40px;" method="post" action="../Controllers/RegisterController.php">
                <div class="mb-3">
                    <label for="nombreUsuario" class="form-label">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="InputEmail" name="InputEmail" required>
                    <div id="emailHelp" class="form-text">Tu información jamás será compartida.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="InputPassword" name="InputPassword" required>
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: palevioletred; color:white; border-color: palevioletred;">Submit</button>
            </form>
        </div>

        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>