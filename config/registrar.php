<?php

include("connect.php");
// session_start();


$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$pass = password_hash($_POST["contra"], PASSWORD_DEFAULT);
$bool = true;
// echo $nombre;

$confir = "SELECT * FROM alumno WHERE correo_alumno = '$correo'";
$confir_correo = mysqli_query($conn, $confir);
// $i = mysqli_fetch_array($confir_correo);
// var_dump(mysqli_num_rows($confir_correo));
// var_dump($i);

if(mysqli_num_rows($confir_correo) > 0){
   echo print_r($i);
   $_SESSION["message"] = "Este correo electrónico ya esta registrado";
   $_SESSION["color"] = "danger";
   header("Location: ../index.php");
} else {
   $insertar = "INSERT INTO alumno(nombre_alumno, correo_alumno, contra_alumno, comodin) VALUES ('$nombre', '$correo', '$pass', '$bool')";

   $resultado = mysqli_query($conn, $insertar);

   if (!$resultado) {
      echo mysqli_error($resultado);
   }
   $_SESSION["message"] = "Registro exitoso";
   $_SESSION["color"] = "success";
   header("Location: ../index.php");
}
