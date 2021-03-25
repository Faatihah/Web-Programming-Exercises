<?php

$baris = 4;
$kolom = 5;
$angka = 1;

echo "<table border='1'>";
for($i =0; $i < $baris; $i++){
	echo "<tr>";
		for ($j = 0 ;$j < 5; $j++){
			if($angka% 2 == 0){
				echo "<td style=background-color:red><font color='white'>";
				echo $angka;
				echo "</font></td>";
				$angka=$angka+1;
			}else{
				echo "<td style=background-color:white><font color='red'>";
				echo $angka;
				echo "</font></td>";
				$angka=$angka+1;
			}
		}
	echo "</tr>";
}
echo "</table>";
?>
