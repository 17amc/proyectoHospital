<?php 
         include("conexion.php");
         $con = conectar();

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $documento = $_POST['documento'];
        $edad = $_POST['edad'];
        $sexo = $_POST['sexo'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];
        
        $sql = "INSERT INTO usuarios (nombre, apellido, documento, edad, sexo, correo, contrasena) VALUES ('$nombre', '$apellido', '$documento', '$edad', '$sexo', '$correo', '$contrasena')";
        $query = mysqli_query($con, $sql);
        

         if($query){
                Header("Location: viewLogin.php");
         } 
?>