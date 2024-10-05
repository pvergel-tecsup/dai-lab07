<?php
require_once('./model/Usuario.php');
require_once('./model/Lista.php');

// Iniciamos la sesión
session_start();

// Obtenemos la lista de usuarios
$lista = new Lista();
$lista->nuevaLista();
$_SESSION['lista'] = $lista->getUsuarios();

$usuario = '';

// Verificamos si un usuario ha ingresado
if (isset($_SESSION['correo'])) {
    header('Location: principal.php');
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
        <form method="post" action="ingresar.php">
            <div class="card mt-5">
                <div class="card-header">
                    <div class="card-title text-center fs-1">Ingreso</div>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="correo" class="col-sm-2 col-form-label">E-mail</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="correo" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="clave" class="col-sm-2 col-form-label">Contraseña</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="clave" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="text-end">
                            ¿No tiene usuario? Regístrese <a href="registro.html">aquí</a>.
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary btn-lg">Ingresar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>