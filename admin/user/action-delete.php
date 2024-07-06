<?php
include '../../koneksi.php';
$uid = $_GET["uid"];
$delete = mysqli_query($koneksi, "delete from user where uid='$uid'");
if ($delete){
    header("location:../../admin.php");
}
?>