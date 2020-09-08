<?php
    
    require_once('../config/bd_conexion.php');
    $id = $_POST['id'];
    $comentario = $_POST['comentario'];


        $sql = "UPDATE comentarios SET  comentario ='".$comentario."' WHERE id ='".$id."'";

        if ($conn->query($sql) === TRUE) {
            $respuesta = array(
                'respuesta' => 'Editado correctamente',
                'code' => 200
            );
        } else {
            $respuesta = array(
                'respuesta' => 'Error en la edicion del comentario',
                'code' => 400
            );
        }

?>