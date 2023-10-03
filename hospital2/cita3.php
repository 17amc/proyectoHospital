<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css\etapa3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendación de Cita</title>
</head>
<body>
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['especializacion'] = $_POST['especializacion'];

    header('Location: cita4.php');
    exit;
}
?>
<header class="header"><img class="logo" src="imagenes/logo.png" alt="10"></header>
        <h1>Ingrese los datos para su cita</h1>
        <form action="cita3.php" method="POST">
            <div class="etapa4">
            <p class="cuantos">Especialización</p>    
            <select name="especializacion" class="seleccionar" required>
                <option value="">seleccionar</option>
                <option value="general">General</option>
                <option value="cardiologia">Cardiología</option>
                <option value="oftalmologia">Oftalmología</option>
                <option value="odontologia">Odontología</option>
                <option value="neurologia">Neurología</option>
            </select>
           </div>
            <input type="submit" class="ingresar" value="Siguiente">
        </form>
</body>
</html>