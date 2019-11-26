<?php
include("config/connect.php");
$id_p_u = $conn->query("SELECT P.id_persona, U.id_usuario FROM personas P INNER JOIN usuarios U ON U.id_persona = P.id_persona");
// $id_usuarios = $conn->query("SELECT id_usuario FROM usuarios");
$array_personas = [];
$array_usuarios = [];
$array_desordenado = [];
// echo print_r($id_personas);
while($i = $id_p_u->fetch_array()){
   // echo $i["id_persona"]."<br>";
   $array_personas[] = $i["id_persona"];
   $array_usuarios[] = $i["id_usuario"];
}
// echo print_r($array_personas);
echo print_r($array_usuarios)."<br>";


// while(){
   
// }

foreach($array_usuarios as $clave => $valor){
   $aleatorio = rand(0, count($array_usuarios)-1);
   $rango = range(0, count($array_usuarios)-1);
   $array_desordenado[$clave] = $array_usuarios[$aleatorio];
   if($array_desordenado[$clave] == $array_usuarios[$aleatorio]){
      

   }

   }
   // if(empty($array_desordenado[$aleatorio])){
   //    $array_desordenado[$aleatorio] = $valor;
   // }

echo print_r($array_desordenado);
// echo $aleatorio;
// foreach($array_usuarios as $valor){
//    shuffle($array_usuarios);
//    if(){

//    }
   
// }

// $array_usuarios = array_reverse($array_usuarios);




// echo print_r($array_usuarios);