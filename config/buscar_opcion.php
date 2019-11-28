<?php
include("connect.php");

$id_user = $_POST["id_user"];
$consulta_usuario = "SELECT P.id_persona, P.nombre_persona, U.id_usuario, U.nombre_usuario FROM personas P INNER JOIN usuarios U ON P.id_persona = U.id_persona WHERE U.id_usuario = '$id_user'";
// echo json_encode($id_user);
$r = mysqli_query($conn, $consulta_usuario);
$objeto = [];

$i = mysqli_fetch_array($r);
$objeto[] = $i["nombre_usuario"];

$consulta_opciones = "SELECT * FROM opciones WHERE id_usuario = '$id_user'";
$r_opciones = mysqli_query($conn, $consulta_opciones);

while($i_op = mysqli_fetch_array($r_opciones)){
   $objeto[] = utf8_encode($i_op["id_opcion"]);
   $objeto[] = utf8_encode($i_op["opcion"]);
   $objeto[] = utf8_encode($i_op["detalle_opcion"]);
}

echo json_encode($objeto);

// echo json_encode($objeto);
// echo json_encode(print_r($objeto));

// $r = mysqli_fetch_assoc(mysqli_query($conn, $consulta));
// $opciones_detalles = [];
// while($i = mysqli_fetch_array($r)){
//    $opciones_detalles[] = $i["opcion"];
//    $opciones_detalles[] = $i["detalle_opcion"];
// }
// $i = mysqli_fetch_assoc($r);
// while($i = mysqli_fetch_array($r)){
// }
// echo json_encode($objeto);
// echo json_encode("Hello");
// echo "<br>";
// echo print_r($i);
// echo print_r($i);



// header("Location: ../guardado.php");