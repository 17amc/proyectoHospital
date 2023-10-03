

<?php
$sintomas = $_POST['sintomas'];
$recomendaciones = $_POST['recomendaciones'];
$correo = $_POST['correo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css\citaresetada.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header class="header"><img class="logo" src="imagenes/logo.png" alt="10"></header>
<h1 class="identi">La formula fue enviada con exito</h1>
<div class="etapaconfi">
        <div class="cita">
        <p> <b> Sintomas:</b> <?php echo $sintomas; ?></p>
        <p> <b>Recomendaciones:</b> <?php echo $recomendaciones; ?></p>
            <p> <b>Fue enviada al correo:</b> <?php echo $correo; ?></p>
           
        </div>
        
    </div>
    <form action="viewLogin.php" method="POST">
    <input type="submit" class="ingresar" value="Salir">
    </form>

</body>
</html>