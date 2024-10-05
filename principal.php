<?php
// Iniciamos la sesión
session_start();

/**
 * Verificamos si existe un usuario logueado.
 * Para ello se verifica si existe una variable de sesión 
 * que contenga el correo del usuario.
 */
if (!isset($_SESSION['correo'])) {
    // Si no existe, se redirige a inicio
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <div class="card-title text-center fs-1">Bienvenido</div>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="nombre" readonly value="<?php echo $_SESSION['nombre'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="correo" readonly value="<?php echo $_SESSION['correo'] ?>">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="text-end">
                    <a href="salir.php" class="btn btn-danger btn-lg">Salir</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>