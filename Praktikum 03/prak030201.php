<?php

function hitungGaji($gol, $masaKerja){
 	if ($gol == 'A'){
  		if ($masaKerja < 10) {
 			$gaji = 5000000;
  		} 
		else {
  			$gaji = 7000000;
  		}
 	} else if ($gol == 'B'){
 			if ($masaKerja < 10) {
 				$gaji = 6000000;
  			} else {
  				$gaji = 8000000;
  			}
  		}
return $gaji;
}

echo "Gaji anda, golongan B dengan masa kerja 3 tahun sebesar Rp.".hitungGaji("B", 3);

 ?>