<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css\etapa4.css">
    <title>Agendación de Cita</title>
</head>

<body>
    <?php 
        include("conexion.php");
        $con = conectar();
        $sql = "SELECT * FROM citas";
        $query = mysqli_query($con, $sql);
?>
<header class="header"><img class="logo" src="imagenes/logo.png" alt="10"></header>
        <div>


            <h1>Ingrese los datos para su cita</h1>
            <form action="insertarcita.php" method="POST">


                <div class="etapafecha">
                    <p class="identi">Selecciona la fecha de tu cita</p>
                    <div class="fecha">
                        <input type="text" class="campo" name="fecha" required>
                        <label for="">dd/mm/aa</label>
                    </div>
                </div>


                <div class="etapahora">
                    <p class="cuantos">Elige una hora</p>

                    <div class="readios">
                        <div class="radio-group">
                            <div>
                                <input type="radio" value="8:00am" name="hora" required>
                                <p>8:00am</p>
                            </div>
                            <div>
                                <input type="radio" value="10:00am" name="hora" required>
                                <p> 10:00am</p>
                            </div>
                            <div>
                                <input type="radio" value="12:00pm" name="hora" required>
                                <p> 12:00pm</p>
                            </div>
                        </div>

                        <div class="radio-group">
                            <div>
                                <input type="radio" value="2:00pm" name="hora" required>
                                <p>2:00pm</p>
                            </div>
                            <div>
                                <input type="radio" value="4:00pm" name="hora" required>
                                <p> 4:00pm</p>
                            </div>
                            <div>
                                <input type="radio" value="6:00pm" name="hora" required>
                                <p> 6:00pm</p>
                            </div>
                        </div>

                    </div>

                </div>
                <input type="submit" class="ingresar" value="Confirmar cita">

            </form>
        </div>

</body>

</html>