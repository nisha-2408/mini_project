<?php 
   define('DB_HOST', 'localhost');
   define('DB_USER', 'Nisha');
   define('DB_PASS', 'nisha2002*');
   define('DB_NAME', 'products');

   // Create Connection

   $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

   // Check Connection
   if($conn->connect_error) {
    die('Connection Failed '. $conn->connect_error);
   }


?>