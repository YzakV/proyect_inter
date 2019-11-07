<?php 
include("config/connect.php"); 
include("includes/header.php"); 
include("includes/nav-index.php");
?>

<?php if(isset($_SESSION["registrado"])){?>
   <div class="alert alert-success alert-dismissible fade show" role="alert">
      <p class="mb-0"><?= $_SESSION["registrado"]; ?></p>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
      </button>
   </div>
<?php session_unset(); } ?>




<?php include("includes/footer.php");?>




