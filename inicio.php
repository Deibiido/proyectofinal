<?php include "cabecera.php" ?>
        <nav>
            <ul>
              <li><a href="index.php">Inicio</a></li>
              <li><a href="noticias.php">Noticias</a></li>
              <li><a href="contacto.php">Contacto</a></li>
              <li style="float:right" class="active"><a href="inicio.html">Iniciar sesión</a></li>
            </ul>
        </nav>

        <div class="cabecera">
          <h1>Salvando vidas</h1>
          <p>Juntos podemos hacer del mundo un lugar mejor</p>
        </div>


<!--La cajita del centro-->
        <div class="datosusu">
        <form method="POST" action="login.php" >
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="password" name="contrasena" placeholder="Contraseña">
            <input type="submit" name="Enviar">

        </form>
</section>
        
    </body>
    
</html>