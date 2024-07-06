<?php
include '../../koneksi.php';

$uid = $_POST["uid"];
$username = $_POST["username"];
$pw = md5($_POST["password"]);
$level = $_POST["level"];

// Cek apakah username sudah ada dalam database
$cek_username = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
if(mysqli_num_rows($cek_username) > 0) {
    header('location:../../admin.php?pesan=usernameduplikat');
} else {
    // Jika belum ada, lakukan proses insert
    $create = mysqli_query($koneksi, "INSERT INTO user (uid, username, password, level) VALUES ('$uid', '$username', '$pw', '$level')");
    if ($create) {
        header("location:../../admin.php");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
