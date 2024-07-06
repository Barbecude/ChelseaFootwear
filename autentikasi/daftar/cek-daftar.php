<?php
session_start();
include '../../koneksi.php';
$us = $_POST['username'];
$pw = $_POST['password'];
//hitung panjang password
if (strlen($pw) < 8) {
    header('location:auth-daftar.php?pesan=passwordkurang');
    exit();
}

// Periksa apakah username sudah ada dalam database
$cek_username = mysqli_query($koneksi, "SELECT COUNT(*) AS count FROM user WHERE username = '$us'");
$row = mysqli_fetch_assoc($cek_username);
if ($row['count'] > 0) {
    // Jika username sudah ada, tampilkan pesan alert
    header('location:auth-daftar.php?pesan=usernameduplikat');
    exit();
}

// Jika username belum ada, lakukan proses pendaftaran
$daftar = mysqli_query($koneksi, "INSERT INTO user (username, password) VALUES ('$us', '$pw')");
if ($daftar) {
    $_SESSION['level'] = "user";
    $_SESSION['nama'] = $us;  
    header('Location: ../../index.php');
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
