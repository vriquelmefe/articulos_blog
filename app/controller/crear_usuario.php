<?php 
if($_POST['nuevo_registro'] == 'nuevo'){
    
   $nombreUsuario = $_POST['nombre_usuario'];
   $email  = $_POST['email'];
   $password = $_POST['password'];
   $id_registro = $_POST['id_registro'];
     $opciones = array(
         'cost' => 12
     );
     $password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones);
    try {
        require_once('../config/bd_conexion.php');
         $stmt = $conn->prepare("INSERT INTO usuarios (nombre_usuario, password, email) VALUES (?, ?, ?)");
         $stmt->bind_param("sss", $nombreUsuario, $password_hashed, $email);
         $stmt->execute();
         $id_registro = $stmt->insert_id;
         
         if($id_registro > 0) {
             $respuesta = array(
                 'respuesta' => 'exito',
                 'code' => 200,
                 'id_admin' => $id_registro
             ); ?>
            <?php
         } else {
             $respuesta = array(
                 'respuesta' => 'Error en la creacion de cuenta',
                 'code' => 400
             );
         }
         $stmt->close();
         $conn->close();
    } catch (Exception $e) {
         echo "Error: " . $e->getMessage();
    }
     
     die(json_encode($respuesta));
}else{
    $toReturn->mensaje = "error en el primer if";
    $myJson= json_encode($toReturn);
    echo $myJson;

}
  
 ?>
