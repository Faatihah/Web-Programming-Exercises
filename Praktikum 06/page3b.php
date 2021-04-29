<?php
include('cek.php');

echo "<h1>Page 3</h1>";
echo "<p>Selamat datang ". $_COOKIE['namauser']."</p>";

echo "<h2>Menu Utama</h2>";
echo "<p><a href='page1a.php'>Page 1</a> | <a href='page2b.php'>Page 2</a> | <a href='page3b.php'>Page 3</a> | <a href='tebangangka.php'>Tebak Angka</a> | <a href='logout1.php'>Logout</a></p>";
?>