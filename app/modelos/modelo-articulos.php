<?php
session_start();

if($_POST['accion'] === 'crear'){
    require_once('../config/bd_conexion.php');
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $fechaPublicacion = date("Y-m-d");
    $autor = $_SESSION['nombre_usuario'];
  
        $sql = "INSERT INTO articulos (titulo, descripcion, fecha_publicacion, autor) VALUES ('".$titulo."','".$descripcion."','".$fechaPublicacion."','".$autor."')";

        if ($conn->query($sql) === TRUE) {
            $respuesta = array(
                'respuesta' => 'Articulo registrado correctamente',
                'code' => 200
            );
            
        } else {
            $respuesta = array(
                'respuesta' => 'Error en la creacion de cuenta',
                'code' => 400
            );

        

        }
        die(json_encode($respuesta));
}




?>