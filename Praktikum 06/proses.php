
<?php
session_start();

// daftar users
$users = [
  ["username1", "Nisa", "123456"],
  ["username2", "Faatihah", "654321"],
  ["username3", "ncg", "112233"],
];

// jika form login sudah submitted
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  foreach ($users as $profile_user) {
    if (($profile_user[0] == $username) && ($profile_user[2] == $password)) {
      $_SESSION['namauser'] = $profile_user[1];
      header("Location: page1.php");
    }
  }
  echo "<h3>Login gagal</h3>";
  echo "<p>Silahkan <a href='form.html'>Login Kembali</a></p>";
}
?>