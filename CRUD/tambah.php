<html>
    <head>
        <title>Tambah Karyawan</title>
    </head>
    <body>
        <a href="index.php">Kembali</a>
        <br/><br/>
        <form action="tambah.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td><input type="number" name="telepon"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki</td>
                    <td><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempat_lahir"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggal_lahir"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="tambah"></td>
                </tr>
            </table>
        </form>
        <?php
        if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $telepon = $_POST['telepon'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];

        include_once("config.php");
        $result = mysqli_query($mysqli, "INSERT INTO karyawan(nama,email,telepon,alamat,jenis_kelamin,tempat_lahir,tanggal_lahir) 
        VALUES('$nama','$email','$telepon','$alamat','$jenis_kelamin','$tempat_lahir','$tanggal_lahir')");
        echo "Data berhasil ditambahkan! <a href='index.php'>Lihat Data Karyawan</a>";
        echo mysqli_error($mysqli);
        }
        ?>
    </body>
</html>