<?php
include '../../koneksi.php'; 

    $productId = $_GET['id_product'];

  
    $query = "DELETE FROM product WHERE id_product = '$productId'";

    if (mysqli_query($koneksi, $query)) {
       
        header('location:../../admin.php');
    } else {
        
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

?>
