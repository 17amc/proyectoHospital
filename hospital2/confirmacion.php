<?php
$fecha = $_GET['fecha'];
$hora = $_GET['hora'];
$nombre = $_GET['nombre'];
$especializacion = $_GET['especializacion'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css\confirmacion.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Cita</title>
</head>
<body>
<header class="header"><img class="logo" src="imagenes/logo.png" alt="10"></header>


<h1 class="identi">Cita confirmada con éxito</h1>
<div class="etapaconfi">
        <div class="cita">
        <p> <b> Genial:</b> <?php echo $nombre; ?> tu cita fue aagendada: </p>
        <p> <b>especializacion:</b> <?php echo $especializacion; ?></p>
            <p> <b>Fecha de la cita:</b> <?php echo $fecha; ?></p>
            <p> <b>Hora de la cita:</b> <?php echo $hora; ?></p>
        </div>
        
    </div>
    <form action="viewLogin.php" method="POST">
    <input type="submit" class="ingresar" value="Salir">
    </form>

</body>
</html>