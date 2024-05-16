<?php include "cabecera.php" ?>
        <nav>
            <ul>
              <li><a href="index.php" class="active">Inicio</a></li>
              <li><a href="noticias.php">Noticias</a></li>
              <li><a href="contacto.php">Contacto</a></li>
              <li style="float:right"><a href="inicio.php">Iniciar sesión</a></li>
            </ul>
        </nav>

        <div class="cabecera">
          <h1>Salvando vidas</h1>
          <p>Juntos podemos hacer del mundo un lugar mejor</p>
        </div>
        
        <div class="presentacion">
          <h2>Iniciativa salvando vidas</h2>
          <h5>¿De que trata esta página web?</h5>
          <div class="fakeimg" style="height:200px;"> <img src="img.jpg"> </div>
          <p>En esta sociedad en la cual se genera mucho estrés, no es muy dificil que la gente termine teniendo problemas de corazón. Para ello hemos inventado esta página, la cual se basa en información que sube la gente sobre la localización de los desfibriladores cardíacos u otros aparatos de interes.</p>
        </div>
        
        
    <!-- Aquí estoy pidiendo los medicamentos que haya en la base de datos medicamentos -->
<?php
    $enlace = mysqli_connect("localhost", "reanimacion", "reanimacion", "reanimacion");
    $peticion = "SELECT * FROM equipos";
    $resultado = mysqli_query($enlace,$peticion);
    while ($fila = $resultado->fetch_assoc()) {
        echo '
        <div class="flotante">
          <h2 class="titulo">Calle: '.$fila['Calle'].'</h2>
          <h2>Local: '.$fila['Local'].'</h2>
          <p>Aparato: '.$fila['Aparato'].'</p>
          <p>Imagen: <p>
          </div>
            ';
}
?>
            
      
      
      
<?php include "footer.php" ?>