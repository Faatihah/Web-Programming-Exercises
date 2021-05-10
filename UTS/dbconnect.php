<?php

$dbHost = 'localhost';
$dbName = 'matematika';
$dbUsername = 'root';
$dbPassword = '';

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($conn->connect_error){
  die("Koneksi Gagal:". $conn->connect_error);
}

?>