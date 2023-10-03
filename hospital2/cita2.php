<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\etapa2.css">
    <title>Agendación de Cita</title>
</head>

<body>

    <?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['edad'] = $_POST['edad'];
    $_SESSION['sexo'] = $_POST['sexo'];

    header('Location: cita3.php');
    exit;
}
?>
<header class="header"><img class="logo" src="imagenes/logo.png" alt="10"></header>

        <div class="contenedor">
            <div>
                <h1>Ingrese los datos para su cita</h1>
                <form action="cita2.php" method="POST">



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
                                <input type="radio" class="radio-masculino" value="Masculino" name="sexo" required>
                            </div>
                            <div class="mujer">
                                <img src="imagenes/mujer.png" alt="">
                                <input type="radio" class="radio-mujer" value="Femenino" name="sexo" required>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="ingresar" value="Siguiente">
                </form>
            </div>
        </div>

</body>

</html>