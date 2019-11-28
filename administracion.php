<?php
include("config/connect.php");
// unset($_POST);
// echo $_POST["admin"];
$admin;
if(isset($_POST["admin"])){
   if(isset($_POST["pass"])){
      $correo = $_POST["admin"];
      $pass = $_POST["pass"];
      $consulta = $conn->query("SELECT * FROM login_admin WHERE correo = '$correo'");
      if($consulta->num_rows > 0){
         $i = $consulta->fetch_array();
         if($pass == $i["pass"]){
            $admin = $correo;
            session_start();
            $_SESSION["admin"] = $admin;
         } else {
            unset($_POST);
            // header("Location: administracion.php");
         }
      } else {
         unset($_POST);
         // header("Location: administracion.php");
      }
   }
}
$title = "Administracion";
include("includes/header.php");
?>
   <body>
      <?php 
      if(!empty($admin)){ ?>
         <div class="container">
            <div class="row">
               <div class="col-12 text-center my-3">
                  <a href="config/admin.php" class="btn btn-warning">Generar aleatorios</a>
                  <?php unset($_POST["admin"]); ?>
               </div>
            </div>
         </div>
      <?php  } else { ?>
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <form action="administracion.php" method="POST">
                     <div class="form-group">
                        <label for="correo">Correo</label>
                        <input class="form-control" type="email" id="correo" name="admin">
                     </div>
                     <div class="form-group">
                        <label for="pass">Contraseña</label>
                        <input class="form-control" type="password" id="pass" name="pass">
                     </div>
                     <input type="submit" class="btn btn-outline-success">
                  </form>
               </div>
            </div>
         </div>
      <?php } ?>

<?php include("includes/footer.php") ?>