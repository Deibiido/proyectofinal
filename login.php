<?php
session_start();
// Abro la conexión con la base de datos
$enlace = mysqli_connect("localhost", "reanimacion", "reanimacion", "reanimacion");
//Le pido el usuario y cintraseña

$peticion = "

SELECT * FROM usuarios
WHERE
usuario = '".$_POST['usuario']."'
AND
contrasena = '".$_POST['contrasena']."'
LIMIT 1
";

$resultado = mysqli_query($enlace,$peticion);

//Esto es para que no puedan pasar sin iniciar sesion
$pasas = false;
$_SESSION['pasas'] = false;

//Si las credenciales son correctas, el pasas es true y te deja avanzar
if ($fila = $resultado->fetch_assoc()) {
    $pasas = true;
    $_SESSION['nombre'] = $fila['nombre'];
    $_SESSION['apellidos'] = $fila['apellidos'];
}else{
    $pasas = false;
    }

//Las condiciones, si pasas es true puedes continuar, si es false no puedes
if($pasas){
    $_SESSION['pasas'] = true;
    
    echo '<meta http-equiv="refresh"
    content="0.1; url=index2.php">';
}else{
    echo "Usuario o contraseña erronea";
    $_SESSION['pasas'] = false;
    
    echo '<meta http-equiv="refresh"
    content="5; url=inicio.php">';
}

//Cierro los recursos que haya abierto
mysqli_close($enlace);


?>