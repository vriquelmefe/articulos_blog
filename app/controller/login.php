<?php

 
    if ($_POST['login_hidden']) {
    
        $nombreUsuario = $_POST['nombre_usuario'];
        $password_login = $_POST['password'];
    
        try{
            require_once('../config/bd_conexion.php');
            $stmt = $conn->prepare("SELECT * FROM usuarios WHERE nombre_usuario = '".$nombreUsuario."'");
            $stmt->bind_param("s", $nombreUsuario);
            $stmt->execute();
            
            $stmt->bind_result($id, $nombreUsuario, $password, $email);
            if($stmt->affected_rows) {
                $existe = $stmt->fetch();
               
                if($existe) {
                    //primer campo es el que mandan por post y el segundo es el de bbdd//
                    if(password_verify($password_login, $password)) {
                        
                        session_start();
                        $_SESSION['nombre_usuario'] = $nombreUsuario;
                        $_SESSION['email'] = $email;
                        $_SESSION['id'] = $id;
                        $respuesta = array(
                            'respuesta' => 'exitoso',
                            'nombre_usuario' => $nombreUsuario
                        ); 
                        

                        
                    
                    } else {
                        $respuesta = array(
                            'respuesta' => 'Usuario y/o contraseña no coinciden',
                            'code' => 400
                        );
                        
                    }
                } else {
                    $respuesta = array(
                        'respuesta' => 'Usuario y/o contraseña no coinciden',
                        'code' => 500
                    );
                    
                }
            }
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
        die(json_encode($respuesta));
    } else {
        $toReturn->mensaje = "error en el primer if";
        $myJson= json_encode($toReturn);
        echo $myJson;
    }

?>