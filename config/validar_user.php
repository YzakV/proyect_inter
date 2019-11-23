<?php
include("connect.php");
$valor_user = $_POST["valor_user"];
$consulta = "SELECT nombre_usuario FROM usuarios WHERE nombre_usuario LIKE '%$valor_user%'";
$r = mysqli_query($conn, $consulta);
if(mysqli_num_rows($r) > 0){
   echo json_encode(false);
} else {
   echo json_encode(true);
}


