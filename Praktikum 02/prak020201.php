<?php

$baris = 4;
$kolom = 5;

echo "<table border='1'>";
for($i =0; $i < $kolom; $i++){
 	echo "<tr>";
 	for ($j = 0 ;$j < $baris; $j++){
 		echo "<td>";
		echo "<p>Hello</p>";
		echo "</td>";
 	}
  	echo "</tr>";
}
echo "</table>";
?>
