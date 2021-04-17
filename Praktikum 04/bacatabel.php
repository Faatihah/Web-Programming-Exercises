<?php
  $namaFile = "datamhs.dat";
  $myfile = fopen($namaFile, "r") or die("Tidak bisa buka file!");
  echo "<h1><center>Data Mahasiswa</center></h1>";
  echo "<div class='container'>";
  echo "<table border='1'>";
  echo "<tr>
  <td>No</td>
  <td>NIM</td>
  <td>Nama Mahasiswa</td>
  <td>Tanggal Lahir</td>
  <td>Tempat Lahir</td>
  <td>Usia (Tahun)</td>
  </tr>";
  for ($n=1; $n < 4; $n++) {
	  while (!feof($myfile)) {
		$list = fgets($myfile);
		$data = explode("|", $list);
		
		echo "<tr>";
		echo "<td>$n</td>";
		for ($i=0; $i < 5; $i++) {
		  if($i == 2){
			$tgl = explode("-",$data[$i]);
			$lahir = date($tgl[0]);
			$sekarang = date("Y");
			$result = $sekarang - $lahir;
			array_push($data, $result);
			echo "<td>$data[$i]</td>";
		  }else{
			echo "<td>$data[$i]</td>";
		  }
		}
		echo "</tr>";
  }
  }
  $jumlah = $n;
  fclose($myfile);

  echo "</table>";
  echo "</div>";
?>
