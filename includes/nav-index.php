<header class="cabecera-index">
   <nav class="nav nav-index justify-content-center">
      <a class="nav-link" href="" data-toggle="modal" data-target="#modal-inicio">Iniciar sesión</a>
      <a class="nav-link" href="" data-toggle="modal" data-target="#modal-registro">Crear cuenta</a>
   </nav>
   <div class="modal fade" id="modal-registro" tabindex="-1" role="dialog" aria-labelledby="modal-registro-label" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="modal-registro-label">Registro</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="config/registrar.php" method="POST" class="" id="form-registro">
                  <div class="form-group">
                     <label for="nombre">Nombre Completo</label>
                     <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Tu Nombre" required>
                  </div>
                  <div class="form-group">
                     <label for="correo">Correo Electronico</label>
                     <input class="form-control" type="email" name="correo" id="correo" placeholder="Tu Email" required>
                  </div>
                  <div class="form-group">
                     <label for="pass">Crea una Constraseña</label>
                     <div class="input-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="pass" id="pass" aria-label="Contraseña" data-toggle="tooltip" data-placement="bottom" title="Minimo 6 caracteres, entre minúsculas, mayúsculas y al menos un numero" required>
                        <div class="input-group-append">
                           <button class="input-group-text" id="ver-pass"><i class="fas fa-eye"></i></button>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="pass-confirm">Repite la Contraseña</label>
                     <div class="input-group">
                        <input type="password" class="form-control" name="pass-confirm" id="pass-confirm" placeholder="Repite contraseña" aria-label="Repite contraseña" required>
                        <div class="input-group-append">
                           <button class="input-group-text" id="ver-pass"><i class="fas fa-eye"></i></button>
                        </div>
                     </div>
                  </div>
                  <input type="submit" value="Registrar" class="btn btn-outline-info my-3">
               </form>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
               <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
         </div>
      </div>
   </div>

   <div class="modal fade" id="modal-inicio" tabindex="-1" role="dialog" aria-labelledby="modal-inicio-label" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="modal-inicio-label">Inicio</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="config/iniciar_sesion.php" method="POST" class="" id="form-inicio">
                  <div class="form-group">
                     <label for="correo-inicio">Correo electrónico</label>
                     <input class="form-control" type="email" name="correo-inicio" id="correo-inicio" placeholder="Tu correo" required>
                  </div>
                  <div class="form-group">
                     <label for="pass-inicio">Contraseña</label>
                     <input class="form-control" type="password" name="pass-inicio" id="pass-inicio" placeholder="Tu contraseña" required>
                  </div>
                  <input type="submit" value="Iniciar sesión" class="btn btn-outline-info my-3">
               </form>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
               <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
         </div>
      </div>
   </div>
   <div class="contenedor-titulo">
      <h1 class="titulo-principal">Intercambio Informática "A"</h1>
   </div>



<!-- Modal -->
