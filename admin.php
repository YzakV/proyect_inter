<?php
include("config/connect.php");
$conn->query("TRUNCATE TABLE asignacion");
$id_p_u = $conn->query("SELECT P.id_persona, U.id_usuario FROM personas P INNER JOIN usuarios U ON U.id_persona = P.id_persona");

$array_personas = [];
$array_usuarios = [];
$array_usuarios_des = [];

while($i = $id_p_u->fetch_array()){
   // echo $i["id_persona"]."<br>";
   $array_personas[] = $i["id_persona"];
   $array_usuarios[] = $i["id_usuario"];
}
foreach($array_usuarios as $clave => $valor){
   $array_usuarios_des[] = $array_usuarios[$clave];
}
// echo print_r($array_usuarios)."<br>";
$bol = [];
do{
   unset($bol);
   shuffle($array_usuarios_des);
   foreach($array_usuarios_des as $clave => $valor){
      if($valor == $array_usuarios[$clave]){
         $bol[] = false;
      } else {
         $bol[] = true;
      }
   }
   // echo print_r($array_usuarios_des)."<p>bol</p>";
} while(in_array(false, $bol));
foreach($array_personas as $clave => $valor){
   $conn->query("INSERT INTO asignacion(id_persona, id_usuario) VALUES ('$valor', '$array_usuarios_des[$clave]')");
}

// echo print_r($bol)."<br>";
// echo print_r($array_usuarios_des)."<p>Definitivo</p>";
// $bol = [false];
// while(in_array(false, $bol)){
   //    unset($bol);
   //    shuffle($array_usuarios_des);
   //    foreach($array_usuarios_des as $clave => $valor){
      //       if($valor == $array_usuarios[$clave]){
         //          $bol[] = false;
         //       } else {
            //          $bol[] = true;
            //       }
            //    }
            // }

// echo print_r($array_usuarios)."<br>";
// echo print_r($array_usuarios_des)."<br>";
// -----------------
// if(count($array_usuarios_des) % 2 != 0){
//    $elemento2 = floor(count($array_usuarios_des) / 2);
//    unset($array_usuarios_des[$elemento2]);
//    array_push($array_usuarios_des, $array_usuarios[$elemento2]);
//    // foreach(){

//    // }
//    $array_usuarios_des = array_reverse($array_usuarios_des); 
// } else {
//    $array_usuarios_des = array_reverse($array_usuarios_des);
// }
//-----------------------


// echo print_r($array_usuarios_des);
// shuffle($array_usuarios_des);
// // $aleatorio = rand(0, count($array_usuarios2)-1);
// // $elemento = "";
// for($i = count($array_usuarios2) - 1; $i >= 0; $i--){
//       $array_desordenado[$i] = $array_usuarios2[$i];
//       if($array_desordenado[$i] == $array_usuarios[$i]){
//          unset($array_desordenado[$i]);
//          array_unshift($array_desordenado, $array_usuarios2[$i]);
//       }
//       // echo $array_usuarios[$i]."<br>";
// }
// echo print_r($array_desordenado);

// while(){
   
   // }
//    echo print_r($array_usuarios)."<br>";
// $rango = range(0, count($array_usuarios)-1);

// foreach($array_usuarios as $clave => $valor){
//    array_push($array_desordenado, $array_usuarios[$clave]);
   
//    // if($array_desordenado[$clave] == $array_usuarios[$aleatorio]){
      

//    // }

// }

// $array_desordenado = array_reverse($array_desordenado);
// foreach($array_usuarios2 as $clave => $valor){
//    $array_desordenado[] = $valor;
//    if($array_desordenado[$clave] == $array_usuarios[$clave]){

//    }
// }

// echo print_r($array_desordenado);

   // if(empty($array_desordenado[$aleatorio])){
   //    $array_desordenado[$aleatorio] = $valor;
   // }

// echo print_r($array_desordenado);
// echo $aleatorio;
// foreach($array_usuarios as $valor){
//    shuffle($array_usuarios);
//    if(){

//    }
   
// }

// $array_usuarios = array_reverse($array_usuarios);

// echo print_r($array_usuarios);