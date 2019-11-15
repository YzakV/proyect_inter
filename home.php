<?php
include("config/connect.php");
// session_start();

if(!isset($_SESSION["usuario"])){
   header("Location: index.php");
}
$title = "Inicio";
include("includes/header.php");
?>
   <div class="contenedor-home-fondo"></div>
   <div class="container-fluid contenedor-home">
      <div class="row">
         <div class="col-12 col-sm-11 col-md-6 subcontenedor-home-1">
            <div class="contenedor-titulo-home">
               <h1 class="titulo-home">¡Hola <?= $_SESSION["usuario"]; ?>!</h1>
               <a class="cerrar-sesion" href="index.php">X Cerrar sesión</a>
            </div>
            <h2 class="subtitulo-home">Te damos la bienvenida al <strong>Intercambio Navideño 2019</strong></h2>
            <p class="mb-5 font-weight-bold"">Instrucciones:</p>
            <p>El intercambio se realizara de manera aleatoria entre los participantes. Cada uno de ell@s debera recibir como maximo un regalo, o en su defecto, el monto total en <strong>EFECTIVO</strong>.</p>
            <p>Los participantes deben crear un usuario y una lista de 3 posibles regalos; esta lista y el usuario seran mostrados a la persona que fuiste asignad@, conservando de esta forma el anonimato.</p>
            <p>A continuación se indican los paso a seguir:</p>
            <ul class="lista-home">
               <li>En la parte inferior se encuentra un boton con la leyenda "Crear lista de regalos", al hacer clic sobre el, nos enviara al formulario donde crearemos <strong>usuario</strong> y <strong>lista de opciones</strong></li>
               <li>Debemos crear un <strong>usuario</strong>. Este sera mostrado a la persona a la que fuiste asignado.<p class="font-weight-bold">*NOTA: El usuario debe ser original y sin referencias obvias a nuestra persona.</p></li>
               <li>Escribir una lista de 3 </li>
               <li>Lo primero que debemos hacer es crear un <strong>usuario</strong> </li>
            </ul>
         </div>
      </div>
   </div>

<?php include("includes/footer.php"); ?>