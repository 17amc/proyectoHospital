<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\etapa1.css">
    <title>Agendación de Cita</title>
</head>

<body>
    <?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['apellido'] = $_POST['apellido'];
    $_SESSION['documento'] = $_POST['documento'];

    header('Location: cita2.php');
    exit;
}

?>
<header class="header"><img class="logo" src="imagenes/logo.png" alt="10"></header>
       
            <div>
                <h1>Ingrese los datos para su cita</h1>
                <form action="cita1.php" method="POST">
                    <div class="contenedor">
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
                        <input type="submit" class="ingresar" value="Siguiente"></input>

                </form>
                </div>
            </div>

       
</body>

</html>