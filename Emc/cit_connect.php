<?php

/* Database Connection */

$servername = "localhost";
$username = "root";
$password = "";
$db ="sign";
$conn = new mysqli($servername,$username,$password,$db);


       if(!$conn)
      {
          die('not connected');
      }
?>
