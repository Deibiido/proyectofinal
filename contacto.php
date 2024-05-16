<?php include "cabecera.php" ?>
             <nav class="navcont">
            <ul>
              <li><a href="index.php">Inicio</a></li>
              <li><a href="noticias.php">Noticias</a></li>
              <li><a href="contacto.php" class="active">Contacto</a></li>
              <li style="float:right"><a href="inicio.php">Iniciar sesión</a></li>
            </ul>
        </nav>
        <main>
            <section class="contacto">
                <h3> ¿Tienes alguna duda o idea que nos quieras comentar? Envíanos un mensaje y nos pondremos en contacto contigo</h3>
                
                <form action="procesacon.php" method="post">    
                    <label for="nombre">
                        Introduce tu nombre:
                    </label><br>                    
                    <input type="text" name="nombre" id="nombre" class="control" placeholder="El campo debe contener 6 caracteres mínimo"><br>  
                    
                    <label for="asunto">
                    Introduce tu email:
                    </label><br>                    
                    <input type="text" name="asunto" id="asunto" class="control" placeholder="El campo debe contener 6 caracteres mínimo"><br>
                    
                    <label for="email">
                    Introduce el asunto de tu mensaje:
                    </label><br>                    
                    <input type="text" name="email" id="email" class="control" placeholder="El campo debe contener 6 caracteres mínimo"><br>  
                    
                    <label for="mensaje">
                    Introduce tu mensaje:
                    </label><br>                    
                    <textarea name="mensaje" id="mensaje" class="control" placeholder="El campo debe contener 6 caracteres mínimo"></textarea><br>
                    
                    <input type="submit" disabled="true" id="botonEnviar">
                    

                    
                </form>
            </section>
            <script src="js/validarFormulario.js"></script>
            
        </main>
<?php include "footer.php" ?>