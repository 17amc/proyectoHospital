<!-- //Con esto ingresa el  usuario. -->

<?php
include("conexion.php");
$con = conectar();

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND contrasena = '$contrasena'";
$query = mysqli_query($con, $sql);

if (mysqli_num_rows($query) ) {
    header("Location: cita1.php");
    exit();
} else {
    header("Location: viewlogin.php?error=1");
    exit();
}
?>
