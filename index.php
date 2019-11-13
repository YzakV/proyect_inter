<?php 
include("config/connect.php");
$title = "Intercambio || 2019";
include("includes/header.php"); 
include("includes/nav-index.php");
?>

<?php if(isset($_SESSION["message"])){?>
      <div class="alert alert-<?= $_SESSION["color"]; ?> alert-dismissible fade show" role="alert">
         <p class="mb-0"><?= $_SESSION["message"]; ?></p>
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
         </button>
      </div>
   </header>
<?php session_destroy();  } else { session_destroy();?>
   </header>
<?php } ?>



<?php include("includes/footer.php");?>




