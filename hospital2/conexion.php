<?php 
        function conectar(){
            $host="localhost:3307";
            $user= "mas";
            $pass = "mas1234";

            $db = "hospital";

            $con = mysqli_connect($host, $user, $pass);
            mysqli_select_db($con, $db);
            return $con;
        }
            
?>