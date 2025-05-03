<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CrismileMx</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- Encabezado principal -->
    <div class="header">
      <div class="container">
        <div class="row">
          <div class="col text-start">
            <a href="WelcomeFile.php" class="btn btn-primary btn-sm btn-brand">
              CrismileMx
            </a>
          </div>
          <div class="col text-end">
            <a href="Register.php" class="btn btn-primary btn-sm btn-secondary-custom">
              Hazte una cuenta
            </a>
            <a href="Login.php" class="btn btn-primary btn-sm btn-secondary-custom">
              Inicia Sesion
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Contenido del login -->
    <div class="container mt-4">
      <h2>Inicia Sesion con tu cuenta</h2>
      <?php
        if (isset($_GET["error"])) {
          echo "<p style='color: red; text-align: center;'>" . htmlspecialchars($_GET["error"]) . "</p>";
        }
      ?>
      <form class="mt-4" method="post" action="../Controllers/LoginController.php">
        <div class="mb-3">
          <label for="nombreUsuario" class="form-label">Nombre de Usuario</label>
          <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" required>
        </div>
        <div class="mb-3">
          <label for="InputPassword" class="form-label">Password</label>
          <input type="password" class="form-control" id="InputPassword" name="InputPassword" required>
        </div>
        <button type="submit" class="btn btn-primary btn-custom">
          Submit
        </button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
            crossorigin="anonymous"></script>
  </body>
</html>
