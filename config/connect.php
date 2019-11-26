<?php 
  $host_name = 'localhost';
  $database = 'dbs220374';
  $user_name = 'root';
  $password = '1234';
  $conn = mysqli_connect($host_name, $user_name, $password, $database);
  
  if (mysqli_connect_errno()) {
     die('<p>Error al conectar con servidor MySQL: '.mysqli_connect_error().'</p>');
   }
   mysqli_set_charset($conn, "uft-8");