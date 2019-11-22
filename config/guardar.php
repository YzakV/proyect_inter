<?php
session_start();
include("connect.php");
if(!isset($_POST["user"])){
   header("Location: ../home.php");
   exit(1);
   // echo "Definida";
   // exit(1);
}
$id_persona = $_SESSION["id"];
$user = $_POST["user"];
$genero = $_POST["genero"];
$opciones = [$_POST["opcion1"], $_POST["opcion2"], $_POST["opcion3"]];
$detalles_opciones = [$_POST["detalle-1"], $_POST["detalle-2"], $_POST["detalle-3"]];

$consulta_insertar_usuario = "INSERT INTO usuarios(id_persona, nombre_usuario, genero) VALUES ('$id_persona', '$user', '$genero')";
$r_insertar_usuario = mysqli_query($conn, $consulta_insertar_usuario);

$consulta_id_usuario = "SELECT id_usuario FROM usuarios WHERE nombre_usuario = '$user'";
$r_id_usuario = mysqli_query($conn, $consulta_id_usuario);
$usuario = mysqli_fetch_array($r_id_usuario);
$usuario_id = $usuario["id_usuario"];

foreach($opciones as $clave => $valor){
   $consulta_opciones = "INSERT INTO opciones(id_usuario, opcion, detalle_opcion) VALUES ('$usuario_id', '$valor', '$detalles_opciones[$clave]')";
   mysqli_query($conn, $consulta_opciones);
}
header("Location: ../guardado.php");

// echo $usuario["id_usuario"];

