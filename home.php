<?php
session_start();
// echo '<pre>'.print_r($_SESSION,1).'</pre>';
include("config/connect.php");

if(!isset($_SESSION["usuario"])){
   header("Location: index.php");
}
$title = "Inicio";
$mes = date("n");
$mes = intval($mes);
define("MESES" , array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"));
// echo var_dump($mes);
for($i = 1; $i < count(MESES); $i++){
   // if($i = 1){
   //    echo MESES[$i - 1];
   // }
   // global $mes;
   // print_r($mes);
   // echo MESES[$i]."<br>";
   if($mes == $i){
      $mes = MESES[$i - 1];
   }
}

include("includes/header.php");
?>
   <body>
      <!-- <div class="jumbotron">
         <div class="contenedor-titulo-home" id="contenedor-titulo-home">
            <h1 class="titulo-home">¡Hola <?php echo $_SESSION["usuario"]; ?>!</h1>
            <a class="cerrar-sesion" href="config/cerrar.php">X Cerrar sesión</a>
         </div> -->
         <!-- <h1 class="display-4">Hola, <?= $_SESSION["usuario"] ?>!</h1> -->
         <!-- <h2 class="subtitulo-home">Te damos la bienvenida al <strong>Intercambio Navideño 2019</strong></h2> -->
         <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> -->
         <!-- <hr class="my-4">
         <p>Por el momento, solo puedes leer las instrucciones para el intercambio, más adelante se habilitara la opción para crear tu usuario .</p>
         <a class="btn btn-primary btn-lg" href="#subcontenedor-home-1" role="button">Leer instrucciones</a>
      </div> -->
      <div class="contenedor-home-fondo"></div>
      <div class="container-fluid contenedor-home">
         <div class="row">
            <div class="col-12 col-sm-11 col-md-6 subcontenedor-home-1" id="subcontenedor-home-1">
               <div class="contenedor-titulo-home" id="contenedor-titulo-home">
                  <h1 class="titulo-home">¡Hola <?php echo $_SESSION["usuario"]; ?>!</h1>
                  <a class="cerrar-sesion" href="config/cerrar.php">X Cerrar sesión</a>
               </div>
               <h2 class="subtitulo-home">Te damos la bienvenida al <strong>Intercambio Navideño 2019</strong></h2>
               <p class="mb-5 font-weight-bold">Instrucciones:</p>
               <p>El intercambio se realizara de manera aleatoria entre los participantes. Cada uno de ell@s debera recibir como maximo un regalo, o en su defecto, el monto total en <strong>EFECTIVO</strong>.</p>
               <p>Cada participante debera crear un usuario y una lista de 3 posibles regalos; esta lista y el usuario seran mostrados a la persona que fuiste asignad@, conservando de esta forma el anonimato.</p>
               <p>A continuación se indican los paso a seguir:</p>
               <ul class="lista-home">
                  <li>En la parte inferior se encuentra un boton con la leyenda "Crear lista de regalos", al hacer clic sobre el, nos enviara al formulario donde crearemos <strong>usuario</strong> y <strong>lista de opciones</strong></li>
                  <li>Debemos crear un <strong>usuario</strong>. Este sera mostrado a la persona a la que fuiste asignado.<p class="font-weight-bold">*NOTA: El usuario debe ser original y sin referencias obvias a nuestra persona.</p></li>
                  <li>La lista de opciones se debe crear con base en el monto minimo y maximo definido para el intercambio. Esta lista debe constar de al menos 3 opciones de regalos; la cual sera enviada a la persona que fuiste asignado</li>
                  <li>Por ultimo, daremos clic en "Guardar" y con esto habremos finalizado el proceso de registro.</li>
               </ul>
               <p class="font-weight-bold">El registro estara habilitado del día <strong>25</strong> al <strong>29</strong> de <strong><?= $mes; ?></strong>.</p>
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
               <div class="contenedor-boton text-center my-5">
                  <button type="button" class="btn btn-info p-3" data-toggle="modal" data-target="#exampleModalCenter">
                     Crear lista de regalos
                  </button>
               </div>

               <!-- Modal -->
            </div>
         </div>
      </div>
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content contenedor-modal-home">
               <div class="modal-header">
                  <input type="text" class="input-user" placeholder="Crea tu usuario aquí" id="user" name="user">
                  <!-- <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5> -->
               </div>
               <div class="modal-body">
                  <div class="contenedor-genero">
                     <p class="my-0 mr-0 mr-md-3">Selecciona tu genero:</p>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genero" value="F" id="inlineCheckbox1">
                        <label class="form-check-label" for="inlineCheckbox1">Mujer</label>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genero" value="M" id="inlineCheckbox2">
                        <label class="form-check-label" for="inlineCheckbox2">Hombre</label>
                     </div>
                  </div>
                  <form action="config/guardar.php" method="POST" id="form-home">
                     <div class="form-group row contenedor-opcion-1">
                        <label class="col-form-label col-12 col-md-3 text-muted mb-3 mb-md-0" for="opcion-1">Opción 1:</label>
                        <div class="col-12 col-md-9" id="grupo-opcion-1">
                           <input type="text" class="form-control" id="opcion-1" name="opcion1" required>
                           <div class="contenedor-check-detalles form-check form-check-inline">
                              <label class="form-check-input" for="opcion-1-check">Agregar detalles</label>
                              <input type="checkbox" class="form-check-label" id="opcion-1-check">
                           </div>
                        </div>
                        <div class="mb-3 contenedor-detalles col-12" id="contenedor-detalles">
                           <!-- is-invalid -->
                           <label for="textarea-detalles">Detalles</label>
                           <textarea class="form-control textarea-detalles" id="textarea-detalles" placeholder="Agrega detalles sobre tu regalo..."></textarea>
                           <!-- <div class="invalid-feedback">
                              Please enter a message in the textarea.
                           </div> -->
                        </div>
                     </div>
                     <div class="form-group row contenedor-opcion-2">
                        <label class="col-form-label col-12 col-md-3 text-muted mb-3 mb-md-0" for="opcion-2">Opción 2:</label>
                        <div class="col-12 col-md-9" id="grupo-opcion-2">
                           <input type="text" class="form-control" id="opcion-2" name="opcion1" required>
                           <div class="contenedor-check-detalles form-check form-check-inline">
                              <label class="form-check-input" for="opcion-2-check">Agregar detalles</label>
                              <input type="checkbox" class="form-check-label" id="opcion-2-check">
                           </div>
                        </div>
                        <div class="mb-3 contenedor-detalles col-12" id="contenedor-detalles">
                           <!-- is-invalid -->
                           <label for="textarea-detalles">Detalles</label>
                           <textarea class="form-control textarea-detalles" id="textarea-detalles" placeholder="Agrega detalles sobre tu regalo..."></textarea>
                           <!-- <div class="invalid-feedback">
                              Please enter a message in the textarea.
                           </div> -->
                        </div>
                     </div>
                     <div class="form-group row contenedor-opcion-3">
                        <label class="col-form-label col-12 col-md-3 text-muted mb-3 mb-md-0" for="opcion-3">Opción 3:</label>
                        <div class="col-12 col-md-9" id="grupo-opcion-3">
                           <input type="text" class="form-control" id="opcion-3" name="opcion3" required>
                           <div class="contenedor-check-detalles form-check form-check-inline">
                              <label class="form-check-input" for="opcion-3-check">Agregar detalles</label>
                              <input type="checkbox" class="form-check-label" id="opcion-3-check">
                           </div>
                        </div>
                        <div class="mb-3 contenedor-detalles col-12" id="contenedor-detalles">
                           <!-- is-invalid -->
                           <label for="textarea-detalles">Detalles</label>
                           <textarea class="form-control textarea-detalles" id="textarea-detalles" placeholder="Agrega detalles sobre tu regalo..."></textarea>
                           <!-- <div class="invalid-feedback">
                              Please enter a message in the textarea.
                           </div> -->
                        </div>
                     </div>
                  </form>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                  <input type="submit" class="btn btn-outline-info" value="Guardar" id="submit-home"></input>
               </div>
            </div>
         </div>
      </div>

<?php include("includes/script-home.php"); ?>
<?php include("includes/footer.php"); ?>