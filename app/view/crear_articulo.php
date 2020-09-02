<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Crear Articulo</title>
</head>
<body>
<section class="seccion contenedor">
  
  <div class="container">
  <h2>Crea tu articulo</h2>
    <div class="row justify-content-md-center">
        <div class="col align-self-center">
            <form id="articulo" class="registro" >
                <div id="datos_usuario" class="registro caja clearfix">
                <div class="form-group">
                    <label for="titulo">titulo:</label>
                    <input type="textarea" class="form-control" id="titulo" name="titulo" placeholder="Ingresa tu titulo">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <input type="textarea" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción">
                </div>
                <div class="form-group enviar" style="padding:10px;">
                    <input type="hidden" id="accion" name ="accion" value="crear">
                    <button id="cargar" type="submit" class="btn btn-primary" value="Añadir">Añadir</button>
                </div>
                </div>
                <!--#datos_usuario-->
            </form>
        </div>
    </div>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="../js/jquery.js"></script>
<script src="../js/articulo.js"></script>
</body>
</html>

