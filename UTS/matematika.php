<?php
    session_start();
    include('dbconnect.php');
    if(isset($_COOKIE['nama'])){
        if($_SESSION['nyawa'] == 0){
           echo"
           <h1>Game Over</h1>
           <h2>{$_COOKIE['nama']} Coba Lagi ya!!!</h2>
           <h2>Score Anda : {$_SESSION['nilai']}</h2>";
           echo"
           <button><a href='matematika.php'>Main Lagi</a></button>
           <button><a href='leaderboard.php'>Lihat Rangking</a></button>";
           
            $sql = "UPDATE game SET nilai='{$_SESSION['nilai']}' WHERE user = '{$_COOKIE['nama']}'";
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
            $jumlah = $_SESSION['angka1'] + $_SESSION['angka2'];
                echo("<h2>Hallo {$_COOKIE['nama']}, Jawab Soal dibawah ini!!!</h2>");
            
                echo("<h3 style='color:#150e56'>Hasil Dari {$_SESSION['angka1']} + {$_SESSION['angka2']} = </h3>");
                echo'<form method="post">
                        <input type="text" name="jawaban" style="padding:8px 80px";"border-radius:4px">
                        <br>
                        <br><button type="submit" name="submit" style="padding:8px 30px"; "border-radius:4px";"color:white";>Submit</button>
                    </br>
                    </form>';
                echo("<h3 style='color:#150e56'> Nyawa : {$_SESSION['nyawa']} |  Nilai : {$_SESSION['nilai']}</h3>");
            if(isset($_POST['submit'])){
                $hasil = $_POST['jawaban'];
                if(intval($hasil) == $jumlah){
                    header("Location:benar.php");
                }else{
                    header("Location:salah.php");
                }
                echo("<a href='matematika.php' style='color:#f21170';> Lanjut</a>");
            }
        }
        }else{
            header("Location:masuk.php");
        }
?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
    <style>
        body{
            font-family: 'Poppins', sans-serif, cursive;
        background : url('https://images.pexels.com/photos/627823/pexels-photo-627823.jpeg');
        background-repeat : no-repeat;
        background-size : cover;
        text-align :center;
        font-size : 20px;
        margin-top : 10%;
        }    
    h1{
        font-family: 'Poppins', sans-serif, cursive;
        }
    h2{
        color: #150e56;
        font-family: 'Poppins', sans-serif, cursive;
        }
    h3{
        font-family: 'Poppins', sans-serif, cursive;
        }
    p{
        font-family: 'Poppins', sans-serif, cursive;
        }
    button{
            padding :20px 60px;
            background : #325288;
            border-radius: 6px;
        }
    button a {
            text-decoration : none;
            font-size : 20px;
            color : white;
            font-family: 'Poppins', sans-serif, cursive;
        }
    button:hover{
            background-color: #ff6701;
            color: white;
        }
</style>
