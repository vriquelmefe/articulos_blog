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
        $sql = "SELECT * FROM comentarios WHERE titulo_id ='".$_GET['id']."' ORDER BY id DESC";
        $result = mysqli_query($conn,$sql);
    ?> 
          <?php while($sql=mysqli_fetch_array($result)){ ?>

            <div class="container" style="padding:10px">
              <div class="form-control col-5">
                <div class="row justify-content-center">
                    <div class="col-8">
                    <?php echo $sql['comentario']; ?>
                    </div>
                    <div class="col-4">
                          <?php echo $sql['nombre'] ?>
                    </div>
        
                </div>
              </div>    
            </div>

           
          <?php } ?>
          <?php  $conn->close(); ?>
          
</body>
</html>
