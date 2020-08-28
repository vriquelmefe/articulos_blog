<h2>hola</h2>

<?php

    require_once('../config/bd_conexion.php');
    $id = $_POST['id'];
        $sql = "DELETE FROM articulos WHERE id ='{$_POST["id"]}'";

        if ($conn->query($sql) === TRUE) {
            $respuesta = array(
                'respuesta' => 'Eliminado correctamente',
                'code' => 200
            );
        } else {
            $respuesta = array(
                'respuesta' => 'Error al eliminar el artículo',
                'code' => 400
            );
        }


?>