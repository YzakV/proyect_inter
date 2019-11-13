<?php
include("config/connect.php");
// session_start();

if(!isset($_SESSION["usuario"])){
   header("Location: index.php");
}
$title = "Inicio";
include("includes/header.php");
?>
      <h1>Bienvenido <?= $_SESSION["usuario"]; ?>!</h1>
      <h2>Actualmente en construcción...</h2>

<?php include("includes/footer.php"); ?>