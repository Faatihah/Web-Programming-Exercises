<?php
session_start();
setcookie('nama', null, -1, '/');
setcookie('email', null, -1, '/');
session_destroy();
header("Location: index.php");
?>