<?php
session_start();
include '../../koneksi.php';
$us = $_POST['username'];
$pw = $_POST['password'];
$login = mysqli_query($koneksi, "SELECT * FROM user where username='$us' and password='$pw'");
$cek = mysqli_num_rows($login);
$data = mysqli_fetch_array($login);
if ($cek > 0){
    if ($data['level']=="user"){
        $_SESSION['nama'] = $us;
        $_SESSION ['level']="user";
        header('location:../../index.php');
    }
}
else {
    header('location:auth-login.php?pesan=gagal');
}
?>


