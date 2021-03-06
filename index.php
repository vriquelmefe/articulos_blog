<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Articulo Blog</title>
</head>
<body>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
    <div class="row justify-content-md-center">
        <div class="col align-self-center">
            <form id="login" name="login">
                <div class="form-group">
                    <label for="nombre_usuario">Nombre Usuario</label>
                    <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="Ingrese Nombre de usuario">
                    
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña">
                </div>
                <input type="text" id="login_hidden" name="login_hidden" value="login" hidden>
                <button type="submit" class="btn btn-primary">Logearse</button>
                <input type="text" id="nuevo" name="nuevo" value="nuevo" hidden>
                <a href="app/view/crear-cuenta.php"><button type="button" class="btn btn-secondary">Registrarse</button></a>
                
            </form>
        </div>
    </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="app/js/jquery.js"></script>
<script src="app/js/scripts.js"></script>
<script src="app/js/cerrar_sesion.js"></script>
</body>
</html>