
<?php

$enlace = mysqli_connect("localhost", "reanimacion", "reanimacion", "reanimacion");

//Meto los datos en la base de datos en esas columnas
$peticion = "
INSERT INTO
equipos
VALUES
(
NULL,
'".$_POST['Calle']."',
'".$_POST['Local']."',
'".$_POST['Aparato']."'
)
";

$resultado = mysqli_query($enlace,$peticion);
    echo '<meta http-equiv="refresh"
    content="0.1; url=index2.php">';
?>

