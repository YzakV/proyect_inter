<?php
session_start();
include("connect.php");
if(!isset($_POST["opcion1"])){
   header("Location: ../guardado.php");
   exit(1);
   // echo "Definida";
   // exit(1);
}
$id_user = $_SESSION["id_user"];
$id_opciones = [$_POST["id_opcion1"], $_POST["id_opcion2"], $_POST["id_opcion3"]];
$opciones = [$_POST["opcion1"], $_POST["opcion2"], $_POST["opcion3"]];
$detalles_opciones = [$_POST["detalle-1"], $_POST["detalle-2"], $_POST["detalle-3"]];

// error_reporting(E_ALL);
// echo print_r($detalles_opciones);
// echo print_r($opciones);
// die();
foreach($opciones as $clave => $valor){
   $consulta_opciones = "UPDATE opciones SET opcion = '$valor', detalle_opcion = '$detalles_opciones[$clave]' WHERE id_opcion = '$id_opciones[$clave]'";
   mysqli_query($conn, $consulta_opciones);
}
$_SESSION["message"] = "Opciones actualizadas";
$_SESSION["color"] = "success";
header("Location: ../guardado.php");