<?php
session_start();

if($_POST['accion'] === 'comentar'){
    require('../config/bd_conexion.php');
    $titulo = $_POST['titulo_id'];
    $autor = $_SESSION['nombre_usuario'];
    $comentario = $_POST['comentario'];
    $fecha = date("Y-m-d");
    

        $sql = "INSERT INTO comentarios (titulo_id, nombre, comentario, fecha) VALUES ('".$titulo."','".$autor."','".$comentario."', '".$fecha."')";


        if ($conn->query($sql) === TRUE) {
            $respuesta = array(
                'respuesta' => 'Comentario registrado correctamente',
                'code' => 200
            );
            
        } else {
            $respuesta = array(
                'respuesta' => 'Error en añadir comentario',
                'code' => 400
            );

        

        }
        die(json_encode($respuesta));
}




?>


