<?php

$baris = 4;
$kolom = 5;
$angka = 1;

echo "<table border='1'>";
for($i =0; $i < $kolom; $i++){
 	echo "<tr>";
 	for ($j = 0 ;$j < $baris; $j++){
 		echo "<td>";
		echo $angka;
		$angka=$angka+1;
		echo "</td>";
 	}
  	echo "</tr>";
}
echo "</table>";
?>
