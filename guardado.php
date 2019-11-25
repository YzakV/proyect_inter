<?php
session_start();
include("config/connect.php");
if(!isset($_SESSION["persona"])){
   header("Location: index.php");
}
// echo "Ya te has registrado, vuelve despues para ver a quien debes darle su regalo";
$id_user = $_SESSION["id_user"];
$title = "Guardado";
include("includes/header.php");
?>
   <body>
      <?php if(isset($_SESSION["message"])){?>
         <div class="alert alert-<?= $_SESSION["color"]; ?> alert-dismissible fade show" role="alert">
            <p class="mb-0"><?= $_SESSION["message"]; ?></p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
      <?php unset($_SESSION["message"]);
            unset($_SESSION["color"]); }  ?>
      <div class="contenedor-guardado">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <h1 class="titulo-guardado">¡Guardado con éxito!</h1>
                  <h2 class="subtitulo-guardado text-muted my-5">Tu usuario así como tus opciones, se guardaron correctamente.</h2>
                  <p class="text-center parrafo-guardado">Regresa aquí a partir del día lunes <strong>2</strong> de <strong>Diciembre</strong> para conocer al usuario y su lista de opciones que se te asigno.</p>
                  <div class="grupo-botones-guardado my-5 d-flex justify-content-around justify-content-md-center">
                     <a style="font-weight: 700;" class="btn btn-outline-danger mr-md-5" href="config/cerrar.php">Cerrar sesión</a>
                     <a style="font-weight: 700;" class="btn btn-outline-info" href="#" data-toggle="modal" data-target="#exampleModalCenter" id="btn-editar">Editar opciones</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <form action="config/editar.php" method="POST" id="form-home">
         <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
               <div class="modal-content contenedor-modal-home">
                  <div class="modal-header">
                     <input type="text" class="input-user" placeholder="Crea tu usuario aquí" id="user" name="user" disabled required>
                     <!-- <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5> -->
                  </div>
                  <div class="modal-body">
                        <!-- <div class="contenedor-genero mb-3" style="display: none;">
                           <p class="my-0 mr-3 mr-md-5">Selecciona tu género:</p>
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="genero" value="F" id="radio-mujer" required>
                              <label class="form-check-label" for="radio-mujer">Mujer</label>
                           </div>
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="genero" value="M" id="radio-hombre" required>
                              <label class="form-check-label" for="radio-hombre">Hombre</label>
                           </div>
                        </div> -->
                        <div class="form-group row contenedor-opcion-1">
                           <!-- <label class="col-form-label col-12 col-md-3 text-muted mb-3 mb-md-0" for="opcion-1">Opción 1:</label> -->
                           <label class="col-form-label col-12 col-md-3 text-muted mb-3 mb-md-0 d-flex aling-items-center align-items-md-center justify-content-center flex-md-column" for="opcion-1">
                              <span>Opción 1:</span>
                              <img class="ml-3 ml-md-0" src="public/images/regalo.svg" alt="" style="max-width: 2.5rem;">
                           </label>
                           <div class="col-12 col-md-9" id="grupo-opcion-1">
                              <input type="text" class="form-control" id="opcion-1" name="opcion1" required>
                              <div class="contenedor-check-detalles form-check form-check-inline">
                                 <label class="form-check-input" for="opcion-1-check">Ver detalles</label>
                                 <input type="checkbox" class="form-check-label" id="opcion-1-check">
                              </div>
                           </div>
                           <div class="mb-3 contenedor-detalles col-12" id="contenedor-detalles">
                              <!-- is-invalid -->
                              <label for="textarea-detalles">Detalles</label>
                              <textarea class="form-control textarea-detalles" id="textarea-detalles" name="detalle-1" placeholder="Agrega detalles sobre tu regalo..."></textarea>
                              <!-- <div class="invalid-feedback">
                                 Please enter a message in the textarea.
                              </div> -->
                           </div>
                        </div>
                        <div class="form-group row contenedor-opcion-2">
                           <!-- <label class="col-form-label col-12 col-md-3 text-muted mb-3 mb-md-0" for="opcion-2">Opción 2:</label> -->
                           <label class="col-form-label col-12 col-md-3 text-muted mb-3 mb-md-0 d-flex aling-items-center align-items-md-center justify-content-center flex-md-column" for="opcion-2">
                              <span>Opción 2:</span>
                              <img class="ml-3 ml-md-0" src="public/images/regalo.svg" alt="" style="max-width: 2.5rem;">
                           </label>
                           <div class="col-12 col-md-9" id="grupo-opcion-2">
                              <input type="text" class="form-control" id="opcion-2" name="opcion2" required>
                              <div class="contenedor-check-detalles form-check form-check-inline">
                                 <label class="form-check-input" for="opcion-2-check">Ver detalles</label>
                                 <input type="checkbox" class="form-check-label" id="opcion-2-check">
                              </div>
                           </div>
                           <div class="mb-3 contenedor-detalles col-12" id="contenedor-detalles">
                              <!-- is-invalid -->
                              <label for="textarea-detalles">Detalles</label>
                              <textarea class="form-control textarea-detalles" id="textarea-detalles" name="detalle-2" placeholder="Agrega detalles sobre tu regalo..."></textarea>
                              <!-- <div class="invalid-feedback">
                                 Please enter a message in the textarea.
                              </div> -->
                           </div>
                        </div>
                        <div class="form-group row contenedor-opcion-3">
                           <!-- <label class="col-form-label col-12 col-md-3 text-muted mb-3 mb-md-0" for="opcion-3">Opción 3:</label> -->
                           <label class="col-form-label col-12 col-md-3 text-muted mb-3 mb-md-0 d-flex aling-items-center align-items-md-center justify-content-center flex-md-column" for="opcion-3">
                              <span>Opción 3:</span>
                              <img class="ml-3 ml-md-0" src="public/images/regalo.svg" alt="" style="max-width: 2.5rem;">
                           </label>
                           <div class="col-12 col-md-9" id="grupo-opcion-3">
                              <input type="text" class="form-control" id="opcion-3" name="opcion3" required>
                              <div class="contenedor-check-detalles form-check form-check-inline">
                                 <label class="form-check-input" for="opcion-3-check">Ver detalles</label>
                                 <input type="checkbox" class="form-check-label" id="opcion-3-check">
                              </div>
                           </div>
                           <div class="mb-3 contenedor-detalles col-12" id="contenedor-detalles">
                              <!-- is-invalid -->
                              <label for="textarea-detalles">Detalles</label>
                              <textarea class="form-control textarea-detalles" id="textarea-detalles" name="detalle-3" placeholder="Agrega detalles sobre tu regalo..."></textarea>
                              <!-- <div class="invalid-feedback">
                                 Please enter a message in the textarea.
                              </div> -->
                           </div>
                        </div>
                        <!-- <div class="contenedor-input">
                           <label for="texto">Correo</label>
                           <input type="email" placeholder="Coloca tu correo" id="texto">
                        </div> -->
                        <div class="contenedor-id-opcion" style="display: none;">
                           <input type="text" name="id_opcion1" id="id_opcion1">
                           <input type="text" name="id_opcion2" id="id_opcion2">
                           <input type="text" name="id_opcion3" id="id_opcion3">
                        </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                     <input type="submit" class="btn btn-outline-info" value="Guardar" id="submit-home"></input>
                  </div>
               </div>
            </div>
         </div>
      </form>
      <script src="js/jquery-3.4.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script>
         $(document).ready(function(){
            let id_user = "<?=  $id_user; ?>";
            let botonEditar = document.getElementById("btn-editar"), usuario = document.getElementById("user"), opciones = document.querySelectorAll("input[type=text][id^=opcion"), detalles = document.querySelectorAll("[id=textarea-detalles]"), inputs_id_opciones = document.querySelectorAll("input[type=text][id^=id_opcion");
            $.ajax({
               url: "config/buscar_opcion.php",
               type: "POST",
               dataType: "JSON",
               data: {id_user},
               success: function(respuesta){
                  // console.log(respuesta);
                  usuario.value = respuesta[0];
                  // for(let i = 0; i < respuesta.length; i++){

                  //    if(i / 2 = 0){
                        
                  //    } else {
                        
                  //    }
                  // }
                  inputs_id_opciones[0].value = respuesta[1]; 
                  inputs_id_opciones[1].value = respuesta[4];
                  inputs_id_opciones[2].value = respuesta[7];
                  opciones[0].value = respuesta[2];
                  detalles[0].value = respuesta[3];
                  opciones[1].value = respuesta[5];
                  detalles[1].value = respuesta[6];
                  opciones[2].value = respuesta[8];
                  detalles[2].value = respuesta[9];
                  // for(let i = 0; i < opciones.length; i++){
                  //    if(i / 2 - 1 != 0){
                  //       opciones[i - 1].value = respuesta[i];
                  //    }
                  //    // opciones[i] = respuesta[]
                  // }
               }
            });
         });
         
         // console.log(inputs_id_opciones);
         // botonEditar.onclick = () => {
            
         // };
      </script>
      <script src="js/script-guardado.js"></script>
      </body>
</html>
