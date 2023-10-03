<?php 
        include("conexion.php");
        $con = conectar();
        $sql = "SELECT * FROM citas";
        $query = mysqli_query($con, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styledoctor.css">
    <title>Listado Pacientes</title>
</head>

<body>
    <header class="header"><img class="logo" src="imagenes/logo.png" alt="10"></header>
            <div class="row" style="margin: 10px;">
                    <div class="table-title">
                            <table class="table-fill">
                                    <thead>
                                            <tr>
                                                <th class="table-left">Nombre</th>
                                                <th>Apellido</th>
                                                <th>Documento</th>
                                                <th>Edad</th>
                                                <th>Sexo</th>
                                                <th>Fecha</th>
                                                <th>Especializacion</th>
                                                <th>Hora</th>
                                                <th></th>
                                            </tr>
                                    </thead>
                                    <tbody class="table-hover">
                                        <?php
                                                while($row = mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                    <th><?php        echo $row['nombre']     ?></th>
                                                    <th><?php        echo $row['apellido']     ?></th>
                                                    <th><?php        echo $row['documento']     ?></th>
                                                    <th><?php        echo $row['edad']     ?></th>
                                                    <th><?php        echo $row['sexo']     ?></th>
                                                    <th><?php        echo $row['fecha']     ?></th>
                                                    <th><?php        echo $row['especializacion']     ?></th>
                                                    <th><?php        echo $row['hora']     ?></th>
                                                    
                                                    <th><form action="vistaresetar.php">
                                                <input type="submit" class="boton" value="Recetar">
                                            </form>
                                            </th>
                                            </tr>
                                            
                                        <?php
                                                }
                                        ?>
                                        
                                </tbody>
                            </table>
                            
                    </div>
            </div>

</body>
</html>