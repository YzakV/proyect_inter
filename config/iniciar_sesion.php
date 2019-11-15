<?php

include("connect.php");

$correo = $_POST["correo-inicio"];
$pass = $_POST["contra-inicio"];
$consulta = "SELECT * FROM alumno WHERE correo_alumno = '$correo'";
$r = mysqli_query($conn, $consulta);
if(mysqli_num_rows($r) > 0){
   $i = mysqli_fetch_array($r);
   if(password_verify($pass, $i["contra_alumno"])){
      // echo "Son iguales";
      // session_start();
      $usuario = explode(" ", $i["nombre_alumno"]);
      $_SESSION["id"] = $i["id_alumno"];
      $_SESSION["usuario"] = $usuario[0];
      $_SESSION["correo"] = $i["correo_alumno"];
      $_SESSION["comodin"] = $i["comodin"];
      
      header("Location: ../home.php");
   } else {
      // session_start();
      $_SESSION["message"] = "Contraseña incorrecta";
      $_SESSION["color"] = "danger";
      header("Location: ../index.php");
   }
} else {
   // session_start();
   $_SESSION["message"] = "Correo incorrecto";
   $_SESSION["color"] = "danger";
   header("Location: ../index.php");
   
}











   




// $consulta = "SELECT * FROM alumno WHERE correo_alumno = '$correo' AND contra_alumno = '$pass'";



