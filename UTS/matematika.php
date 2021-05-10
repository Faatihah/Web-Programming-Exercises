<?php
   session_start();
   include('dbconnect.php');
   if(isset($_COOKIE['nama'])){
       if($_SESSION['nyawa'] == 0){
           echo"
           <h1>Game Over</h1>
           <h2>Halo,{$_COOKIE['nama']} Coba lain Kali Lagi Ya! Semangat :)</h2>
           <h2>Score Anda : {$_SESSION['nilai']}</h2>
           <a href='game.php'>Main Lagi</a>
           <a href='Rangking.php'>Lihat Rangking</a>";
           
           $sql = "UPDATE gameku SET poin='{$_SESSION['nilai']}' WHERE username = '{$_COOKIE['name']}'";
           if($conn->query($sql) === TRUE){
               echo "<br/>Skor Disimpan";
           }else {
               die ("Error: " . $sql . "<br>" . $conn->error);
           }
           $conn->close();
           $_SESSION['nilai'] = 0;
           $_SESSION['nyawa'] = 5;
           $_SESSION['angka1'] = random_int(0, 20);   
           $_SESSION['angka2'] = random_int(0, 20);
       }else{
           echo"
        <div class="container mt-5">
        <form action="result.php" method="POST">
          <label for="penjumlahan" class="h1"><?= $nilaiA; ?> + <?= $nilaiB; ?> = </label>
          <input type="number" name="jawaban" id="penjumlahan" class="lebar py-2 px-1">
          <input type="submit" value="Submit" name="submit" class="btn btn-primary py-2 px-3 ml-2">
        </form>
        <a href="logout.php" class="btn btn-danger mt-5">Keluar</a>
      </div>";
   }else{
       header("Location:login.php");
   }
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
<style>
    body{
    font-family: 'Fredericka the Great', cursive;
    background : url('https://image.freepik.com/free-vector/dark-minimal-hexagons-background_79603-1454.jpg');
    background-repeat : no-repeat;
    background-size : cover;
    text-align :center;
    font-size : 20px;
    margin-top : 10%;
    }    
h1{
    font-family: 'Fredericka the Great', cursive;
    }
h2{
    color: #fed049;
    font-family: 'Fredericka the Great', cursive;
    }
h3{
    font-family: 'Fredericka the Great', cursive;
    }
p{
    font-family: 'Fredericka the Great', cursive;
    }
</style>