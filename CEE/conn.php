<?php 

$host = "localhost:3366";
$user = "root";
$pass = "";
$db   = "cee_db2";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>