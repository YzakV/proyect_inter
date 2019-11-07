<?php

session_start();

$conn = mysqli_connect("localhost", "root", "1234", "prueba_inter");
if(!$conn){
   echo "No se pudo conectar a la db";
}

mysqli_set_charset($conn, "uft-8");