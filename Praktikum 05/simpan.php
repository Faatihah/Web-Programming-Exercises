<?php

$namaFile = "datamhs.dat";
$myFile = fopen($namaFile, "a") or die("Tidak bisa membuka file!");


$nim1 = $_POST['nim'];
$nama1 = $_POST['nama'];
$tgllahir1 = $_POST['tgllhr'];
$tmplahir1 = $_POST['tmptlhr'];


fwrite($myFile, "\n".$nim1."|".$nama1."|".$tgllahir1."|".$tmplahir1."");
fclose($myFile);

echo "Data Berhasl ditambahkan";
?>