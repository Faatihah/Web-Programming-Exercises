<?php

$baris = 4;
$kolom = 5;
$angka = 0;

echo "<table border='1'>";
for($i =0; $i < $kolom; $i++){
	if(($i % 2) != 0){
			$bgcolor="white";
		} else{
			$bgcolor="red";
		}
		echo "<tr bgcolor=$bgcolor>";
			for ($j = 0 ;$j < $baris; $j++){
				echo "<td>";
					$angka=$angka+1;
						if($i% 2 != 0)
							echo "<font color='red'>".$angka."</font>";
						if($i% 2 == 0)
							echo "<font color='white'>".$angka."</font>";
				echo "</td>";
			}
		echo "</tr>";
}
echo "</table>";
?>
