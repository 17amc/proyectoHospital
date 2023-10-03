

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receta Médica</title>
    <link rel="stylesheet" href="css/viewReceta.css">
</head>
<body>
<header class="header"><img class="logo" src="imagenes/logo.png" alt="10"></header>

<div>
    <div class="arriba">
        <div class="hola">
            <h1>Ingrese la información del paciente</h1>
            <form action="recetar.php" method="POST">
            <p>Síntomas del paciente</p>
            <textarea name="sintomas" id="" cols="100" rows="10" required></textarea>
            <p>Recomendaciones para el paciente</p>
            <textarea name="recomendaciones" id="" cols="100" rows="10" required></textarea>
            <input type="text" class="form-correo" name="correo" placeholder="Correo" required></input>
            <br>
            <input  style="margin-top: 20px;" type="submit" class="btn-send"></input>            
            </form>            
        </div>
    </div>
</div>
</body>
</html>
