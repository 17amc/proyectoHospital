<!-- //Con esto ingresa el  doctor. -->

<?php
include("conexion.php");
$con = conectar();

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$sql = "SELECT * FROM doctores WHERE correo = '$correo' AND contrasena = '$contrasena'";
$query = mysqli_query($con, $sql);

if (mysqli_num_rows($query) ) {
    header("Location: viewDoc.php");
    exit(); 
} else {
    header("Location: viewlogin.php?error=1");
    exit();
}
?>
