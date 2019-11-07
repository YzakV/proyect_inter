<header class="cabecera-index">
   <nav class="nav nav-index justify-content-center">
      <a class="nav-link" href="" data-toggle="modal" data-target="#modal-inicio">Iniciar sesión</a>
      <a class="nav-link" href="" data-toggle="modal" data-target="#modal-registro">Crear cuenta</a>
   </nav>
</header>


<!-- Modal -->
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
                  <label for="contra">Crea una Constraseña</label>
                  <input type="password" class="form-control" name="contra" id="contra" placeholder="Contraseña" required>
               </div>
               <div class="form-group">
                  <label for="contra-confir">Repite la Contraseña</label>
                  <input type="password" class="form-control" name="contra-confir" id="contra-confir" placeholder="Repite contraseña" required>
               </div>
               <input type="submit" value="Registrar" class="btn btn-primary">
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
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
            <form action="config/iniciar_sesion.php" method="POST" class="" id="form-registro">
               <div class="form-group">
                  <label for="correo-inicio">Correo electrónico</label>
                  <input class="form-control" type="email" name="correo-inicio" id="correo-inicio" placeholder="Tu correo" required>
               </div>
               <div class="form-group">
                  <label for="contra-inicio">Contraseña</label>
                  <input class="form-control" type="password" name="contra-inicio" id="contra-inicio" placeholder="Tu contraseña" required>
               </div>
               <input type="submit" value="Iniciar sesión" class="btn btn-primary">
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
         </div>
      </div>
   </div>
</div>