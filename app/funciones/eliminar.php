<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    require('../config/bd_conexion.php');
    $id = $_GET['id'];
    
    #$stmt = $conn->prepare("SELECT * FROM `articulos`");
    $sql = "SELECT * FROM articulos WHERE id = '".$id."'";
    $result = mysqli_query($conn,$sql);
    while($mostrar=mysqli_fetch_array($result)){ ?>
    <?php if($_SESSION['nombre_usuario']  == $mostrar['autor']) { ?>
           
        <section class="seccion contenedor"> 
                    <h2>Crea tu articulo</h2>
                    <form id="articulo" name="articulo" class="registro"  method="post">
                        <div id="datos_usuario" class="registro caja clearfix">
                        <div class="campo">
                            <label for="titulo">titulo:</label>
                            <input type="text" id="titulo" name="titulo" placeholder="Ingresa tu titulo" value= <?php echo $mostrar['titulo']; ?> >
                        </div>
                        <div class="campo">
                            <label for="descripcion">Descripción:</label>
                            <input type="textarea" id="descripcion" name="descripcion" placeholder="Descripción" value = <?php echo $mostrar['descripcion']; ?> >
                        </div>
                        <div class="campo enviar">
                            <input type="hidden" id="id" name ="id" value=<?php echo $mostrar['id']; ?>>
                            <button id="cargar" type="submit" class="btn btn-primary" value="Borrar">Borrar</button>
                        </div>
                        </div>
                        <!--#datos_usuario-->
                    </form>
                    </section>
                <?php } else { ?>
                    <h1>No esta autorizado para eliminar este cambio</h1>
                <?php }; ?>
                <?php
           
    }
  
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  <script src="../js/jquery.js"></script>
<script src="../js/eliminar.js"></script>
</body>
</html>