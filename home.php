<?php
include("config/connect.php");
// session_start();

if(!isset($_SESSION["usuario"])){
   header("Location: index.php");
}
$title = "Inicio";
include("includes/header.php");
?>
   <body>
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
               <p>Cada participante debera crear un usuario y una lista de 3 posibles regalos; esta lista y el usuario seran mostrados a la persona que fuiste asignad@, conservando de esta forma el anonimato.</p>
               <p>A continuación se indican los paso a seguir:</p>
               <ul class="lista-home">
                  <li>En la parte inferior se encuentra un boton con la leyenda "Crear lista de regalos", al hacer clic sobre el, nos enviara al formulario donde crearemos <strong>usuario</strong> y <strong>lista de opciones</strong></li>
                  <li>Debemos crear un <strong>usuario</strong>. Este sera mostrado a la persona a la que fuiste asignado.<p class="font-weight-bold">*NOTA: El usuario debe ser original y sin referencias obvias a nuestra persona.</p></li>
                  <li>La lista de opciones se debe crear con base en el monto minimo y maximo definido para el intercambio. Esta lista debe constar de al menos 3 opciones de regalos; la cual sera enviada a la persona que fuiste asignado</li>
                  <li>Por ultimo, daremos clic en "Guardar" y con esto habremos finalizado el proceso de registro.</li>
               </ul>
               <p class="font-weight-bold">El registro estara habilitado del día <strong>25</strong> al <strong>29</strong> de <strong>Noviembre</strong>.</p>
               <p class="">A partir del día <strong>2</strong> de <strong>Diciembre</strong>, al iniciar sesión, se podra visualizar el <strong>usuario</strong> y su lista de opciones que te asignaron.</p>
               <ul>
                  <li>
                     <p class="font-weight-bold">Cantidad de intercambio: $200 a $300.</p>
                  </li>
                  <li>
                     <p class="font-weight-bold">Fecha de intercambio: <u>20 de Diciembre</u>.</p>
                  </li>
               </ul>
               <!-- Button trigger modal -->
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
               Launch demo modal
               </button>

               <!-- Modal -->
            </div>
         </div>
      </div>
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <input type="text" class="form-control input-user" placeholder="Coloca aquí tu usuario">
                  <!-- <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5> -->
               </div>
               <div class="modal-body">
               ...
               </div>
               <div class="modal-footer">
               <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
               <button type="button" class="btn btn-primary">Guardar</button>
               </div>
            </div>
         </div>
      </div>

<?php include("includes/footer.php"); ?>