<?php
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
          
                <div class="row justify-content-center">
                  <div class="col-6">
                    <a href="articulo.php?id=<?php echo $mostrar['id']; ?>"><?php echo $mostrar['titulo'] ?></a>
                  </div>
                  <div class="col-4">
                      <?php echo $mostrar['autor'] ?>
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
