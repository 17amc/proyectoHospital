<?php 
   include("conexion.php");
   $con = conectar();
   $sql = "SELECT * FROM usuarios";
   $query = mysqli_query($con, $sql);
   ?>

<script>
function cerrarMensajeError() {
    document.getElementById('error-message').style.display = 'none';
}
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   
    <link rel="stylesheet" href="css\LoginStyle.css">
</head>

<body>
<header class="header"><img class="logo" src="imagenes/logo.png" alt="10"></header>
<h1>Incio de sesión</h1>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form class="asf" action="ingresoDoc.php" method="POST">
                <h2>DOCTORES</h2>
               
                <span>Ingrse sus datos doctor</span>
                <input type="text"  class="inputs" name="correo" placeholder="Correo" required></input>
         <input type="password" class="inputs" name="contrasena" placeholder="Contraseña" required></input>
         <input type="submit" class="ingresar" value="Iniciar"></input>
              
            </form>
        </div>
        <div class="form-container sign-in-container">
            
            
            
        
            <form class="asf" action="ingreso.php" method="POST">
                <h2>PACIENTES</h2>
                <span>Ingrese sus datos paciente</span>
                <input  type="text" class="inputs"  name="correo" placeholder="Correo" required></input>
                <input type="password"  class="inputs" name="contrasena" placeholder="Contraseña" required></input>
                <input type="submit" class="ingresar" value="Iniciar"></input>
                <?php
if (isset($_GET['error']) && $_GET['error'] == 1) {
    echo "<div title='Cerrar el mensaje' style='margin-top:6px;' id='error-message'><a style='color:red; font-weight: 400; font-size:16px;' href='#' onclick='cerrarMensajeError()'>Usuario incorrecto</a></div>";
}
?>
            </form>

        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                <p>Portal de inicio de sesión para pacinetes</p>
                    <button class="ghost" id="IngresoDoctores">Ingresar</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <p>Portal de inicio de sesión para doctores</p>
                    <button class="ghost" id="IngresoPacientes">Ingresar</button>
                </div>
            </div>
        </div>
    </div>


    <form action="viewRegistro.php" method="POST">
        <div class="span-registro">
        <span>¿Aun no tienes un usuario?</span>
    <input type="submit" class="registrar" value="Registrarse">
        </div>
           
    </form>

    <script src="loging.js" ></script>
</body>
</html>
