<?php
    session_start();
    
?>
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
            require('../config/bd_conexion.php');
            #$stmt = $conn->prepare("SELECT * FROM `articulos`");
            $sql = "SELECT * FROM articulos ORDER BY id DESC";
            $result = mysqli_query($conn,$sql);
          ?> 
          <?php while($mostrar=mysqli_fetch_array($result)){ ?>
             
            <div class="container">
              <div class="form-control col-7" style="padding:10px">
                  <div class="row row-cols-4 justify-content-center">
                      <div class="col-5">
                        <a href="articulo.php?id=<?php echo $mostrar['id']; ?>"><?php echo $mostrar['titulo'] ?></a>
                      </div>
                      <div class="col">
                          <?php echo $mostrar['autor'] ?>
                      </div>
                      
                      <div class="col">
                      <?php if($_SESSION['nombre_usuario'] == $mostrar['autor'] ){ ?>
                      <a class="btn-editar btn" href="../funciones/actualizar.php?id=<?php echo $mostrar['id']; ?>">Editar</a>
                      <a class="btn-borrar btn" href="../funciones/eliminar.php?id=<?php echo $mostrar['id']; ?>">BORRAR</a>
                      <?php } ?>
                      </div>
                  </div>
              </div>    
            </div>
          
           
          <?php } ?>
          <?php  $conn->close(); ?>
          
             
        
                  <!-- /* <a class="btn-editar btn" href="../funciones/actualizar.php?id=<?php echo $mostrar['id']; ?>">Editar</a>*/
                  /* <a class="btn-borrar btn" href="../funciones/eliminar.php?id=<?php echo $mostrar['id']; ?>">BORRAR</a>*/  -->     
               
       
<script src="../js/jquery.js"></script>
<script src="../js/editar.js"></script>
<script src="../js/eliminar.js"></script>
</body>
</html>
