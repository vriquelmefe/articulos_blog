<h2>uwu</h2>
<?php

    require('inc/bd_conexion.php');
    $id = $_POST['id'];
    #$stmt = $conn->prepare("SELECT * FROM `articulos`");
    $sql = "SELECT * FROM usuarios WHERE id = '".$id."'";
    $result = mysqli_query($conn,$sql);
    while($mostrar=mysqli_fetch_array($result)){
?>

<?php } ?>

