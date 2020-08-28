<?php
    session_start();
    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Cache-control" content="no-cache">
    <link rel="shortcut icon" href="../img/FAVbyPhanie2.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Artículos de mi Blog</title>
  </head>
<body class="contenedor">

<a href="cerrar_sesion.php"><button type="button" id="cerrar_sesion" name="cerrar_sesion" class="btn btn-secondary">Cerrar Sesion</button></a>
  <a href="crear_articulo.php">Crear Articulo</a>

  <?php include_once '../funciones/nuevo_articulo.php'; ?>
  
   <?php if(isset($_SESSION['nombre_usuario'])){ ?>
        <input type="button" value="logeado">
        <p>Bienvenido <?php echo $_SESSION['nombre_usuario']?></p>
   <?php }else{ ?>
    <input type="button" value="no logeado">
   <?php }; ?>
      
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../js/jquery.js"></script>
  <script src="../js/scripts.js"></script>
 
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>
</html>