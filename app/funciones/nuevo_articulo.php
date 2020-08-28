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
  <div  class = " bg-blanco contenedor sombra contactos ">
      <div  class = " contenedor-contactos ">
          <h2> Articulos</h2 >

          <input  type = "text " id = "buscar " class = "buscador sombra " placeholder = " Buscar Artículo ... " >

          <p  class = "total-articulos "></p >
      <div class="contenedor-tabla">   
        <table>
            <thead>
              <tr>
                <td>titulo</td>
                <td>descripcion</td>
                <td>fecha_publicacion</td>
                <td>autor</td>
                <td>acciones</td>
              </tr>
              </thead>
            <tbody>

          <?php
            require('../config/bd_conexion.php');
            #$stmt = $conn->prepare("SELECT * FROM `articulos`");
            $sql = "SELECT * FROM articulos";
            $result = mysqli_query($conn,$sql);
          ?> 
          <?php while($mostrar=mysqli_fetch_array($result)){ ?>
            <tr>
              <td><?php echo $mostrar['titulo'] ?></td>
              <td><?php echo $mostrar['descripcion'] ?></td>
              <td><?php echo $mostrar['fecha_publicacion'] ?></td>
              <td><?php echo $mostrar['autor'] ?></td>
              <?php if($_SESSION['nombre_usuario'] == $mostrar['autor'] ){ ?>
                <td>   
                  <a class="btn-editar btn" href="../funciones/actualizar.php?id=<?php echo $mostrar['id']; ?>">Editar</a>
                  <a class="btn-borrar btn" href="../funciones/eliminar.php?id=<?php echo $mostrar['id']; ?>">BORRAR</a>        
                </td> 
              <?php } ?>
              
            </tr>
          <?php } ?>
          <?php  $conn->close(); ?>
        </table>
      </div>
  </div>

<script src="../js/jquery.js"></script>
<script src="../js/editar.js"></script>
<script src="../js/eliminar.js"></script>
</body>
</html>
