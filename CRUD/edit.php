<?php
include_once("config.php");
if(isset($_POST['update']))
{
    $id_karyawan = $_POST['id_karyawan'];
    $nama=$_POST['name'];
    $telepon=$_POST['telepon'];
    $email=$_POST['email'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
$result = mysqli_query($mysqli, "UPDATE data_karyawan SET nama='$nama',email='$email',telepon='$telepon',alamat='$alamat',jenis_kelamin='$jenis_kelamin',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir' WHERE id=$id");
header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM data_karyawan WHERE id_karyawan=$id");
while($user_data = mysqli_fetch_assoc($result))
{
    $id_karyawan =$user_data['id_karyawan'];
    $nama = $user_data['nama'];
    $email = $user_data['email'];
    $telepon = $user_data['telepon'];
    $alamat = $user_data['alamat'];
    $jenis_kelamin = $user_data['jenis_kelamin'];
    $tempat_lahir = $user_data['tempat_lahir'];
    $tanggal_lahir = $user_data['tanggal_lahir'];
}
?>
<html>
    <head>
        <title>Edit Data Karyawan</title>
    </head>
    <body>
        <a href="index.php">Home</a>
        <br/><br/>
        <form name="update_user" method="post" action="db.php">
            <table border="0">
            <tr>
                <td>Id Karyawan</td>
                <td><input type="int" name="id_karyawan" value=<?php echo $id_karyawan;?>></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td><input type="text" name="telepon" value=<?php echo $telepon;?>></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="enum" name="jenis_kelamin" value=<?php echo $jenis_kelamin;?>></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempat_lahir" value=<?php echo $tempat_lahir;?>></td>
            </tr>
            <tr>
                <td>Tanggal lahir</td>
                <td><input type="date" name="tanggal_lahir" value=<?php echo $tanggal_lahir;?>></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Update"></td>
            </tr>
            </table>
        </form>
    </body>
</html> 
