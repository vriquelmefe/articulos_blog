<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="comentario" name="comentario">
        <h2>Comentarios</h2>
        <form action="">
            <label for="textarea"></label>
            <center><p><textarea name="comentario" id="textarea" cols="50" rows="5"></textarea></p></center>
            <p><input type="submit" name="comentar" id="comentar" value="comentar"></p>
        </form>
        <?php 
            if(isset($_POST['comentar'])){
                $query = $conn->prepare("INSERT INTO comentarios (comentario,nombre,fecha) VALUES('".$_POST['comentario']."', '".$_SESSION['nombre_usuario']."', NOW()");
                if($query){

                }


        }?>

    </div>
</body>
</html>

