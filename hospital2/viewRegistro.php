<?php 
        include("conexion.php");
        $con = conectar();
        $sql = "SELECT * FROM usuarios";
        $query = mysqli_query($con, $sql);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css\styleRegistro.css">
        <title>Página Registro</title>
    </head>
    <body>


    <header class="header"><img class="logo" src="imagenes/logo.png"></header>
    <h1>Portal de registro</h1>
            <form  action="insertar.php" method="POST">

                <div class="etapa1">
                    <p class="cuantos">¿Cual es tu nombre?</p>
                    <div class="login">

                        <div class="nombre">
                            <input type="text" class="campo" name="nombre" required>
                            <label for="">Nombre</label>
                        </div>
                        <div class="apellido">
                            <input type="text" class="campo" name="apellido" required>
                            <label for="">Apellido</label>
                        </div>
                    </div>

                </div>


                <div class="etapa2">
                    <p class="identi">¿Cual es tu identificación?</p>
                    <div class="documento">
                        <input type="text" class="campo" name="documento" required>
                        <label for="">Documento</label>
                    </div>
                </div>

                <div class="etapa3">
                    <p class="cuantos">¿Cuantos años tienes?</p>

                    <input class="years" class="campo" type="number" maxlength="2" id="myInput" name="edad" required>
                    <label class="años">Años</label>
                </div>


                <div class="etapa4">
                    <p class="cuantos">¿Cual es tu genero?</p>
                    <div class="imagen-container">
                        <div class="hombre">

                            <img src="imagenes/hombre.png" alt="">
                            <input type="radio" class="radio-masculino" value="M" name="sexo">
                        </div>
                        <div class="mujer">
                            <img src="imagenes/mujer.png" alt="">
                            <input type="radio" class="radio-mujer" value="F" name="sexo">
                        </div>
                    </div>
                </div>
                <div class="etapa5">
                    <p class="cuantos">¡Falta poco!</p>

                    <div class="corcontra">
                        <div class="input-correo">
                            <input type="text" class="campo" name="correo" required>
                            <label for="">Correo</label>
                        </div>

                        <div class="input-contraseña">
                            <input type="password" class="campo" name="contrasena" required>
                            <label for="">Contraseña</label>
                        </div>
                    </div>


                </div>

                <input type="submit" class="ingresar" value="Iniciar"></input>
            </form>
        </div>




    </body>

    </html>