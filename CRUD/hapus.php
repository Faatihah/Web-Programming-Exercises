<?php
include_once("config.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM data_karyawan WHERE id_karyawan=$id");
header("Location:index.php");
?>