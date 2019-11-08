<?php

include("connect.php");


$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$pass = $_POST["contra"];
$bool = true;
// echo $nombre;

$confir = "SELECT * FROM alumno WHERE correo_alumno = '$correo'";
$confir_correo = mysqli_query($conn, $confir);
$i = mysqli_fetch_array($confir_correo);
if(count($i) > 0){
   echo print_r($i);
   $_SESSION["no-registrado"] = "Este correo electrónico ya esta registrado";
   header("Location: ../index.php");
} else {
   $insertar = "INSERT INTO alumno(nombre_alumno, correo_alumno, contra_alumno, comodin) VALUES ('$nombre', '$correo', '$pass', '$bool')";

   $resultado = mysqli_query($conn, $insertar);

   if (!$resultado) {
      echo mysqli_error($resultado);
   }
   $_SESSION["registrado"] = "Registro exitoso";
   header("Location: ../index.php");
}
?>
