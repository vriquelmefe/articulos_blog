<?php
            require('../config/bd_conexion.php');
            #$stmt = $conn->prepare("SELECT * FROM `articulos`");
            $sql = "SELECT * FROM articulos WHERE id = '".$_GET['id']."'";
            $result = mysqli_query($conn,$sql);
          ?> 
          <?php while($mostrar=mysqli_fetch_array($result)){ ?>
            <h2><?php echo $mostrar['titulo'] ?></h2>
            <p><?php echo $mostrar['descripcion'] ?></p>
            
          <?php } ?>
          <?php  $conn->close(); ?>