<?php
    session_start();
    include('dbconnect.php');
    $_SESSION['nyawa'] -= 1;
        $_SESSION['nilai'] -= 2;
            echo("<h2 style='color:#f21170'>Yahh {$_COOKIE['nama']} Jawaban Salah! </h2>
            <h3 style='color:#f21170'>Nyawa : {$_SESSION['nyawa']} | Nilai : {$_SESSION['nilai']}</h3>");
            echo"
            <br>
            <button><a href='matematika.php' ;>Lanjut</a></button>
            <button><a href='leaderboard.php'>Menyerah</a></button><center>";
            $_SESSION['angka1'] = random_int(0, 20);
            $_SESSION['angka2'] = random_int(0, 20);
    ?>   
    
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
         