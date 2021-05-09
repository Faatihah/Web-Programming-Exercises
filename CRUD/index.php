<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM `data_karyawan`");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Company</title>
        <style>
            html {
                scroll-behavior: smooth;
            }
            #box1 {
                width:100%;
                height:550px;
                background:url('https://images.pexels.com/photos/225502/pexels-photo-225502.jpeg');
                background-repeat: no-repeat;
                background-size: cover;
            }
            ul{
                padding: 2px 10px;
            }
            .navi{
                background: #222; 
                overflow: hidden;
                box-shadow: 0px 2px 10px black;
                background:#caf7e3;
            }
            button{
                padding: 14px 40px;
                margin: 0 40px;
            }
            button:hover {
                box-shadow: 0 12px 16px 0 rgba(0,0,255,0.3), 0 17px 50px 0 rgba(0,0,255,0.3);
            }
            button a{
                padding: 0 20px;
                text-decoration:none;
            }
            h1{
                font-family: 'Poppins', sans-serif;
                font-size: 80px;
                color: white;
            }
        </style>
    </head>
    <body>
        <nav class="navi">
        <ul>
            <a href="#" class="navbar-brand"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Skymark_Airlines_company_logos.svg/1024px-Skymark_Airlines_company_logos.svg.png" style="width: 5%;"></a>
        </ul>
        </nav>
        <div id="box1">
            <center>
            <br><br>
            <h1>Input Data Karyawan</h1>
            <button><a href="tambah.php">Add Karyawan</a></button>
            </center>
            <br/>
            <br/>
        </div>
        <section id="table">
            <center>
            <table width='80%' style="margin-top:30px; text-align:center;" border=1>
                <tr>
                    <th>ID karyawan</th> <th>Nama</th> <th>Email</th> <th>Telepon</th> <th>Alamat</th> <th>Jenis Kelamin</th> <th>Tempat Lahir</th> <th>Tanggal Lahir</th>
                </tr>
                <?php
                while($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$user_data['id_karyawan']."</td>";
                echo "<td>".$user_data['nama']."</td>";
                echo "<td>".$user_data['email']."</td>";
                echo "<td>".$user_data['telepon']."</td>";
                echo "<td>".$user_data['alamat']."</td>";
                echo "<td>".$user_data['jenis_kelamin']."</td>";
                echo "<td>".$user_data['tempat_lahir']."</td>";
                echo "<td>".$user_data['tanggal_lahir']."</td>";
                echo "<td><a href='edit.php?id=$user_data[id_karyawan]'>Edit</a> | <a href='hapus.php?id=$user_data[id_karyawan]'>Delete</a></td></tr>";
                }
                ?>
            </table>
            </center>
        </section>
    </body>
</html>
