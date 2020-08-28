<?php
    
    require_once('../config/bd_conexion.php');
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];


        $sql = "UPDATE articulos SET titulo ='".$titulo."' , descripcion ='".$descripcion."' WHERE id ='".$id."'";

        if ($conn->query($sql) === TRUE) {
            $respuesta = array(
                'respuesta' => 'Editado correctamente',
                'code' => 200
            );
        } else {
            $respuesta = array(
                'respuesta' => 'Error en la edicion del artículo',
                'code' => 400
            );
        }

?>