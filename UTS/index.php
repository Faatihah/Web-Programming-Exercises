<?php
    session_start();
    if(isset($_COOKIE['nama'])){
        echo "Halo, {$_COOKIE['nama']} , Selamat Datang di Game Penjumlahan ini!";
        echo"
        <br>
        <button><a href='matematika.php' ;>Start Game</a></button>
        <button><a href='masuk.php?del=y' ;>Login</a></button>";
    }else{
        header("Location:masuk.php");
    }
?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        body{
            background: url('http');
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Poppins', sans-serif, cursive;
            text-align: center;
            font-size:35px;
            margin-top:12%;
        }
        button{
            padding :20px 60px;
            background : black;
            border-radius: 6px;
        }
        button a {
            text-decoration : none;
            font-size : 20px;
            color : white;
            font-family: 'Poppins', sans-serif;, cursive;
        }
        button:hover{
            background-color: red;
            color: white;
        }
    </style>