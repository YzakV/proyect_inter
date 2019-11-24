<?php
session_start();
include("connect.php");
if(!isset($_POST["nombre"])){
   header("Location: ../index.php");
   exit(1);
}

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$pass = password_hash($_POST["pass"], PASSWORD_DEFAULT);

$confirm = "SELECT * FROM alumno WHERE correo_alumno = '$correo'";
$confirm_correo = mysqli_query($conn, $confirm);
// $i = mysqli_fetch_array($confir_correo);
// var_dump(mysqli_num_rows($confir_correo));
// var_dump($i);
if(mysqli_num_rows($confirm_correo) > 0){
   // echo print_r($i);
   $_SESSION["message"] = "Este correo electrónico ya esta registrado";
   $_SESSION["color"] = "danger";
   header("Location: ../index.php");
} else {
   $consulta = "INSERT INTO personas(nombre_persona, correo_persona, pass_persona) VALUES ('$nombre', '$correo', '$pass')";

   $resultado = mysqli_query($conn, $consulta);

   if (!$resultado) {
      echo mysqli_error($resultado);
   }
   $_SESSION["message"] = "Registro exitoso";
   $_SESSION["color"] = "success";
   header("Location: ../index.php");
}
