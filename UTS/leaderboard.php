<?php
    include('dbconnect.php');
    $no = 1;

    $sql = "SELECT * FROM game ORDER BY nilai DESC LIMIT 10";
    $res = $conn->query($sql);
    echo("<center>");
    echo("<table border=1 style='margin-top:8%; width:45%;'>
        <tr>
            <th style='width:5%';>No</th>
            <th>Nama</th>
            <th>Nilai</th>
        </tr>
        </center>");
    if ($res->num_rows >0){
        while($row = $res->fetch_assoc()){
            echo("<center>
            <tr>
                <td>{$no}</td>
                <td>{$row['user']}</td>
                <td>{$row['nilai']}</td>
            </tr>
            </center>");
            $no++;
        }
    }
    echo("</table>");
    echo("</center>");
    echo("<br>");
    echo("
        <center><button><a href='matematika.php'>Main Lagi</a></button>
        <button><a href='keluar.php'>Logout</a></button><center>");

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
        color: #393e46;
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
