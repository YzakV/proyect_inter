<?php
include("connect.php");

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$usuario = "";
$pass = password_hash($_POST["contra"], PASSWORD_DEFAULT);
$bool = false;
$alumno_asignado = 0;
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
   $insertar = "INSERT INTO alumno(alumno_asignado, nombre_alumno, usuario_alumno, correo_alumno, contra_alumno, opciones_alumno) VALUES ('$alumno_asignado', '$nombre', '$usuario', '$correo', '$pass', '$bool')";

   $resultado = mysqli_query($conn, $insertar);

   if (!$resultado) {
      echo mysqli_error($resultado);
   }
   $_SESSION["message"] = "Registro exitoso";
   $_SESSION["color"] = "success";
   header("Location: ../index.php");
}
