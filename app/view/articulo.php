<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Articulo comentar</title>
</head>
<body>
<?php
            require('../config/bd_conexion.php');
            #$stmt = $conn->prepare("SELECT * FROM `articulos`");
            $sql = "SELECT * FROM articulos WHERE id = '".$_GET['id']."'";
            $result = mysqli_query($conn,$sql);
          ?> 
          <?php while($mostrar=mysqli_fetch_array($result)){ ?>
            
              
              <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h3 class="display-4"><?php echo $mostrar['titulo'] ?></h3>
                <p class="lead"><?php echo $mostrar['descripcion'] ?></p>
              </div>
            </div>
            <div class="container">
              <form id="comentario" name="comentario">
              <div class="form-group">
                <label for="comentario">Añadir Comentario</label>
                <textarea class="form-control" id="comentario" name="comentario" rows="3"></textarea>
              </div>
                  <input type="text" id="accion" name="accion" value="comentar" hidden>
                  <input type="text" id="titulo_id" name="titulo_id" value="<?php echo $mostrar['id']; ?>" hidden>
                  <button type="submit" class="btn btn-primary">Añadir</button>
                </form>
            </div>
            
            

          <?php } ?>
          <?php  $conn->close(); ?>


          <?php include_once '../funciones/mostrar_comentarios.php'; ?>
   

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="../js/jquery.js"></script>
<script src="../js/comentario.js"></script>
</body>
</html>
