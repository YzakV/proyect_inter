<?php
session_start();
if(!isset($_SESSION["usuario_asignado"])){
   header("Location: index.php");
}
include("config/connect.php");
$id_user_asignado = $_SESSION["usuario_asignado"];

$consulta = $conn->query("SELECT P.nombre_persona, U.nombre_usuario, O.opcion, O.detalle_opcion FROM usuarios U INNER JOIN personas P ON P.id_persona = U.id_persona INNER JOIN opciones O ON U.id_usuario = O.id_usuario WHERE U.id_usuario = '$id_user_asignado'");
// echo print_r($consulta);
$opciones = [];

while($i = $consulta->fetch_assoc()){
   $opciones["nombre_usuario"] = $i["nombre_usuario"];
   $opciones[] = $i["opcion"];
   $opciones[] = $i["detalle_opcion"];
}
$title = "Asignación";
include("includes/header.php");
// echo print_r($opciones);
?>

   <body>
      <div class="contenedor-img-asignacion">
      </div>
      <div class="contenedor-asignacion">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="section-cerrar-asignacion">
                     <span>Usuario asignado:</span>
                     <a class="cerrar-sesion text-right" href="config/cerrar.php">X Cerrar sesión</a>
                  </div>
                  <h1 class="titulo-asignacion mb-5"><?= $opciones["nombre_usuario"]; ?></h1>
                  <p>Su lista de opciones, es la siguiente:</p>
                  <div class="list-group">
                     <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                           <h3 class="mb-1"><strong><?= $opciones[0]; ?></strong></h3>
                           <small class="text-muted">Op. 1</small>
                        </div>
                        <p class="mb-1"><?= $opciones[1]; ?></p>
                     </a>
                     <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                           <h3 class="mb-1"><strong><?= $opciones[2]; ?></strong></h3>
                           <small class="text-muted">Op. 2</small>
                        </div>
                        <p class="mb-1"><?= $opciones[3]; ?></p>
                     </a>
                     <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                           <h3 class="mb-1"><strong><?= $opciones[4]; ?></strong></h3>
                           <small class="text-muted">Op. 3</small>
                        </div>
                        <p class="mb-1"><?= $opciones[5]; ?></p>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>




<?php include("includes/footer.php"); ?>