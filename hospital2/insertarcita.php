<?php 
session_start();
include("conexion.php");
$con = conectar();


$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];
$documento = $_SESSION['documento'];
$edad = $_SESSION['edad'];
$sexo = $_SESSION['sexo'];
$especializacion = $_SESSION['especializacion'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];


$sql = "INSERT INTO citas (nombre, apellido, documento, edad, sexo, fecha, especializacion, hora) VALUES ('$nombre', '$apellido', '$documento', '$edad', '$sexo', '$fecha',  '$especializacion', '$hora')";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: confirmacion.php?fecha=$fecha&hora=$hora&nombre=$nombre&especializacion=$especializacion");
} else {
    echo "Ya tiene una cita asignada a esta hora";
}
?>
