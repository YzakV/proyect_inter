<?php
session_start();
include("config/connect.php");
if(!isset($_SESSION["persona"])){
   header("Location: index.php");
}
// echo "Ya te has registrado, vuelve despues para ver a quien debes darle su regalo";

$title = "Guardado";
include("includes/header.php");
?>
   <body>
      <div class="contenedor-guardado">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <h1 class="titulo-guardado">¡Guardado con éxito!</h1>
                  <h2 class="subtitulo-guardado text-muted my-5">Tu usuario así como tus opciones, se guardaron correctamente.</h2>
                  <p class="text-center parrafo-guardado">Regresa aquí a partir del día lunes <strong>2</strong> de <strong>Diciembre</strong> para conocer al usuario que se te asigno.</p>
                  <div class="grupo-botones-guardado my-5 d-flex justify-content-around justify-content-md-center">
                     <a class="btn btn-danger mr-md-5" href="config/cerrar.php">Cerrar sesión</a>
                     <a class="btn btn-primary" href="">Editar opciones</a>
                  
                  </div>
               </div>
            </div>
         </div>
      </div>
      




<?php 
include("includes/footer.php"); 
?>
