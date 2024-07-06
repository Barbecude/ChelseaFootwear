<?php
include '../../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST['productName'];
    $productType = $_POST['productType'];
    $productSize = implode(',', $_POST['productSize']);
    $productPrice = $_POST['productPrice'];
    $productDesc = $_POST['productDesc'];

    // Handle file upload
    $file = $_FILES['productImage'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    
    if ($fileError === 0) {
        $fileDestination = $fileName;
        move_uploaded_file($fileTmpName, $fileDestination);
        
        $query = "INSERT INTO product (productImage, productName, productType, productSize, productPrice, productDesc) 
                  VALUES ('$fileName', '$productName', '$productType', '$productSize', '$productPrice', '$productDesc')";
        
        if (mysqli_query($koneksi, $query)) {
            header('location:../../admin.php');
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
        }
    } else {
        echo "Error uploading file.";
    }
}

?>
