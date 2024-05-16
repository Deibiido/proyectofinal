<?php include "cabecera.php" ?>

<style>
    input{
        text-align: center;
    }

</style>
        <nav>
            <ul>
              <li><a href="index.php">Inicio</a></li>
              <li><a href="noticias.php">Noticias</a></li>
              <li><a href="contacto.php">Contacto</a></li>
              <li style="float:right"><a href='logout.php'>Cerrrar sesión</a></li>
                <li style="float:right"><a href='paneldecontrol.php'  class="active">Nueva entrada</a></li>
            </ul>
        </nav>

<?php
// Abro la conexión con la base de datos
session_start();
//Esta parte va con la de login, si tienes el pasas correcto te dejan entrar, si no te sale un mensaje
if(!isset($_SESSION['pasas']) || $_SESSION['pasas'] == false){
    die("Te has intentado colar");
}

//Saludo de bienvenida con el Nombre y Apellido del que haya iniciado sesion

    
?>

<!--Aquí se escribe la consulta y se envia a la base de datos-->
<h1> Nueva localización </h1>    
        <div class="datosusu">
        <form action="insertar.php" method="POST">
            <input type="text" name="Calle" placeholder="CALLE">
            <input type="text" name="Local" placeholder="LOCAL">
            <input type="text" name="Aparato" placeholder="APARATO">
            <input type="submit" value="Enviar">
        </form>
        </div>





        

</body>
</html>
