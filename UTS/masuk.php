<?php
   session_start();

include('dbconnect.php');
if (isset($_POST['masuk'])){
    setcookie("nama", $_POST['nama'], time()+3*30*24*3600);
    $_SESSION['nyawa'] = 5;
    $_SESSION['nilai'] = 0;
    $_SESSION['angka1'] = rand(0,20);
    $_SESSION['angka2'] = rand(0,20);
    
    $sql = "INSERT INTO game(user)
				VALUES ('{$_POST['nama']}')";
		$conn->query($sql);
        $conn->close();
		header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Game</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <form action="masuk.php" method="post">
        <h1 style= 'font-size:50px;'><center>LOGIN GAME</center></h1>
        <h2 style= 'font-size:30px;'><center>Nama</center></h2> 
            <center><input type="text" name="nama"></center>
        <h2 style= 'font-size:30px;'><center>Email</center></h2>
            <center><input type="email" name="email"></center>
        <br>
        <br>
            <!-- <center><button type="submit" name="submit">SUBMIT</button></center> -->
            <center><input type="submit" name="masuk" value="submit"></center>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <a href="rangking.php" style='color:#ffdf6b; font-size:30px;'> Lihat Rangking</a>
    </form>
</body>
</html>