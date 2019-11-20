<?php 
  $host_name = 'db5000225724.hosting-data.io';
  $database = 'dbs220374';
  $user_name = 'dbu267239';
  $password = 'qweasdzxC123.';
  $conn = mysqli_connect($host_name, $user_name, $password, $database);
  
  if (mysqli_connect_errno()) {
     die('<p>Error al conectar con servidor MySQL: '.mysqli_connect_error().'</p>');
   }
   mysqli_set_charset($conn, "uft-8");