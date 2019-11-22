<?php
include("connect.php");

$correo = $_POST["correo-inicio"];
$pass = $_POST["pass-inicio"];
$consulta = "SELECT * FROM personas WHERE correo_persona = '$correo'";
$r = mysqli_query($conn, $consulta);
if(mysqli_num_rows($r) > 0){
   $i = mysqli_fetch_array($r);
   if(password_verify($pass, $i["pass_persona"])){
      // echo "Son iguales";
      session_start();
      $persona = explode(" ", $i["nombre_persona"]);
      $_SESSION["persona"] = $persona[0];
      $_SESSION["id"] = $i["id_persona"];
      $_SESSION["correo"] = $i["correo_persona"];
      // echo '<pre>'.print_r($_SESSION,1).'</pre>';die();
      // echo "<script>location.href = '../home.php';</script>";
      header("Location: ../home.php");
   } else {
      session_start();
      $_SESSION["message"] = "Contraseña incorrecta";
      $_SESSION["color"] = "danger";
      // echo "<script>location.href = '../index.php';</script>";
      header("Location: ../index.php");
   }
} else {
   session_start();
   $_SESSION["message"] = "Correo incorrecto";
   $_SESSION["color"] = "danger";
   header("Location: ../index.php");
  	// echo $_SESSION;
  	// print_r($_SESSION); 
   // echo "<script>location.href = '../index.php';</script>";
}
// $consulta = "SELECT * FROM alumno WHERE correo_alumno = '$correo' AND contra_alumno = '$pass'";
// print_r($_SESSION);
// print_r($_POST);
// echo 'furulante';
?>