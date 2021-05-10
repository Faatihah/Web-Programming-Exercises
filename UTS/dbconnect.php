<?php

$dbhost = 'localhost';
$dbname = 'matematika';
$dbuser = 'root';
$dbpass = '';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die("Gagal Konek".$conn->error);

?>