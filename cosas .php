        <form method="POST" action="login.php">
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="password" name="contrasena" placeholder="Contraseña">
            <input type="submit" name="Enviar">

        </form>

            .contenedor {
                display: flex;
                justify-content: center;
                align-items: center;
            }

        form{
                width: 100%;
                height: 200px;
                padding: 20px;
                background: white;
                margin: auto;
                border-radius: 10px;
                box-shadow: 0px 10px 30px black;
                text-align: center;   
            }

            input{
                width: 80%;
                text-align: center;
                margin: auto;
                padding: 10px;
                margin: 10px;
                display: inline;
            }


 <?php
    $enlace = mysqli_connect("localhost", "proyecto", "proyecto", "proyecto");
    $peticion = "select * FROM medicamentos";
    mysqli_query($enlace,$peticion);
    echo '<meta http-equiv="refresh"
    content="5; url=paneldecontrol.php">';
 
?>

        <style>
            body,html{
                background: white;
                font-family: sans-serif;
            }
            
            form{
                width: 200px;
                height: 200px;
                padding: 20px;
                background: white;
                margin: auto;
                border-radius: 10px;
                box-shadow: 0px 10px 30px black;
                text-align: center;   
            }
            
            input{
                width: 80%;
                text-align: center;
                margin: auto;
                padding: 10px;
                margin: 10px;
            }
            
            .contenedor {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            
            h1{
                margin-top: 300px;
                text-align: center;
            }
            
        </style>