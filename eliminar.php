 <?php
    $enlace = mysqli_connect("localhost", "reanimacion", "reanimacion", "reanimacion");
    //Elimino la fila que quiero con el identificador que tienen
    $peticion = "DELETE FROM equipos WHERE Identificador = ".$_GET['id']."";
    mysqli_query($enlace,$peticion);
    echo '<meta http-equiv="refresh"
    content="0.1; url=index2.php">';
 
?>