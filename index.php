<?php
session_start();
// print_r($_SESSION);
// die();
// echo '<pre>'.print_r($_SESSION,1).'</pre>';die();
if(isset($_SESSION["persona"])){
   header("Location: home.php");
   exit(1);
}
include("config/connect.php");
$title = "Intercambio || 2019";
include("includes/header.php"); 
include("includes/nav-index.php");
?>

   <body class="hidden">
<?php if(isset($_SESSION["message"])):?>
         <div class="alert alert-<?= $_SESSION["color"]; ?> alert-dismissible fade show" role="alert">
            <p class="mb-0"><?= $_SESSION["message"]; ?></p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
      </header>
<?php else: ?>
      </header>
<?php endif; session_destroy(); ?>



<?php 
include("includes/snow.php");
include("includes/script-index.php");
include("includes/footer.php");
?>