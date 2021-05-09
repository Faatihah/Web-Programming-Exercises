<?php
    include_once("config.php");
    $id_karyawan =$_POST['id_karyawan'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    if (!$conn){
        die("Connection Error".mysqli_connect_error());
    ?>
    <script>console.log('Connection Error');</script>
    <?php
    }else{
    ?>
    <script>console.log('Connection Success')</script>
    <?php
    }
    $query = "UPDATE data_karyawan SET 
    nama='$nama', 
    email='$email', 
    telepon='$telepon', 
    alamat='$alamat', 
    jenis_kelamin='$jenis_kelamin',
    tempat_lahir='$tempat_lahir',
    tanggal_lahir='$tanggal_lahir' 
    WHERE id_karyawan=$id_karyawan";
    if(!mysqli_query($conn, $query)){
        die("Update Data Error  : ".mysqli_error($conn));
    }else{
        header("Location:index.php");
    }
    mysqli_close($conn);
?>
