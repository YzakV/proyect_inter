<?php
include("config/connect.php");
// session_start();

if(!isset($_SESSION["usuario"])){
   header("Location: index.php");
}
$title = "Inicio";
include("includes/header.php");
?>
   <img class="img-fondo-home" src="public/images/fondo-3.jpg" alt="">
   <div class="contenedor-home">
      <div class="contenedor-home-text">
         <h1>Bienvenido <?= $_SESSION["usuario"]; ?>!</h1>
         <h2>Esta página se encuentractualmente en construcción...</h2>
      </div>
      <div class="contenedor-home-text2">
         <h3>Prueba</h3>
      </div>
      <div class="contenedor-home-text3">
         <h3>Prueba2</h3>
      </div>
   </div>

<?php include("includes/footer.php"); ?>