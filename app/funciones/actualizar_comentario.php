<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    <title>Edita tu Comentario</title>
</head>
<body>
<?php
    session_start();
    require('../config/bd_conexion.php');
    $id = $_GET['id'];
    
    #$stmt = $conn->prepare("SELECT * FROM `articulos`");
    $sql = "SELECT * FROM comentarios WHERE id = '".$_GET['id']."'";
    $result = mysqli_query($conn,$sql);
    while($sql=mysqli_fetch_array($result)){ ?>
    <?php if($_SESSION['nombre_usuario']  == $sql['nombre']) { ?>

        <section>
    <h2 class="text-info d-flex justify-content-around" style="padding:20px">Edita tu comentario</h2>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="form-control">
                    <div class="row justify-content-md-center"> 
                        <div class="col align-self-center">
                                <form id="comentario_editar" name="comentario_editar" class="registro" method="post">
                                    <div id="datos_usuario" name="datos_usuario" class="registro caja clearfix">
                                    <div class="form-group">
                                        <label for="comentario">Comentario:</label> 
                                        <textarea type="textarea" class="form-control" id="comentario" name="comentario" placeholder="Ingresa tu titulo"  > <?php echo $sql['comentario']; ?></textarea>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="id" name ="id" value=<?php echo $sql['id']; ?>>
                                        <input type="hidden" class="form-control" id="id_articulo" name ="id_articulo" value=<?php echo $sql['titulo_id']; ?>>
                                        <button id="editar" type="submit" class="btn btn-primary" value="editar">Actualizar</button>
                                    </div>
                                    </div>
                                    <!--#datos_usuario-->
                                </form>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </section>


        <?php } else { ?>
            <h1>No esta autorizado para realizar este cambio</h1>
        <?php }; ?>
        <?php
           
    }
    
?>
<?php  $conn->close(); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  <script src="../js/jquery.js"></script>
<script src="../js/editar_comentario.js"></script>
</body>
</html>

