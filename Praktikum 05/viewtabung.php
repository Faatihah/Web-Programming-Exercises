<?php

$namaFile = "datatabung.dat";
$myFile = fopen($namaFile, "r") or die("Tidak bisa membuka file ini");

echo "<h2>Data Ukuran Tabung</h2>";

echo "<table border='1'>";
echo("<tr>
	<th>Nama Tabung</th> 
	<th>Diameter</th> 
	<th>Tinggi</th> 
	<th>Luas</th>
	</tr>");

while (!feof($myFile)){

	$datatabung = explode(",", fgets($myFile));
	echo"<tr>";
	$link = "http://localhost/PemWeb/Praktikum%2005/hitungluas.php?n=$datatabung[0]&d=$datatabung[1]&t=$datatabung[2]";
	echo("
		<td>$datatabung[0]</td> <td>$datatabung[1]</td> <td>$datatabung[2]</td> <td><a href=$link target='_blank'>view</a></td>
		");
	echo("</tr>");
};

echo("</table>");

fclose($myFile);
?>