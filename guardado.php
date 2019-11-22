<?php
session_start();
include("config/connect.php");
if(!isset($_SESSION["persona"])){
   header("Location: index.php");
}
echo "Ya te has registrado, vuelve despues para ver a quien debes darle su regalo";
?>
<a class="cerrar-sesion" href="config/cerrar.php">X Cerrar sesión</a>
