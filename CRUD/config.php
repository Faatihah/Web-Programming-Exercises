<?php
$databaseHost = 'localhost';
$databaseName = 'data_karyawan';
$databaseUsername = 'root';
$databasePassword = '';
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if (!$mysqli){
    echo("Error:".mysqli_connect_error($mysqli));
}
?>
