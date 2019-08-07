<?php
 $server = 'localhost:3306';
 $username = 'root';
 $password = '';
 $database = 'sipm';
 
   $link = mysqli_connect($server, $username, $password, $database);

   if ($link ) {
      return "Conectado";
   } else {
      return "No conectado";
   }
?>