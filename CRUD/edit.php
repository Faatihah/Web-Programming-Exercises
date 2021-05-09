<?php
include_once("config.php");
if(isset($_POST['update']))
{
    $idkaryawan = $_POST['idkaryawan'];
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $alamat = $_POST['alamat'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $tempatlahir = $_POST['tempatlahir'];
    $tanggallahir = $_POST['tanggallahir'];
$result = mysqli_query($mysqli, "UPDATE karyawan SET nama='$name',email='$email',mobile='$mobile',alamat='$alamat',jeniskelamin='$jeniskelamin',tempatlahir='$tempatlahir',tanggallahir='$tanggallahir' WHERE id=$id");
header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM karyawan WHERE idkaryawan=$id");
while($user_data = mysqli_fetch_assoc($result))
{
    $idkaryawan =$user_data['idkaryawan'];
    $name = $user_data['nama'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
    $alamat = $user_data['alamat'];
    $jeniskelamin = $user_data['jenis_kelamin'];
    $tempat_lahir = $user_data['tempat_lahir'];
    $tanggal_lahir = $user_data['tanggal_lahir'];
}
?>
<html>
    <head>
        <title>Edit Data Mahasiswa</title>
    </head>
    <body>
        <a href="index.php">Home</a>
        <br/><br/>
        <form name="update_user" method="post" action="database.php">
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
                <td>Mobile</td>
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