<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/customStyleBootstrap/bootstrap.min.css">
    <script src="assets/bootstrap/dist/js/bootstrap.bundle.js"></script>
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- JS -->
    <script src="script.js" async></script>
    <title>Admin - Chelsea Footwear</title>
</head>
<body>
<div class="container">
<h1 class="mb-3">ADMIN DASHBOARD</h1>
<h1>ADD USER</h1>
<form method="POST" action="admin/user/action-create.php">
    <?php
if (isset($_GET['pesan'])){
            if($_GET['pesan']=="usernameduplikat"){
                echo "<div class='alert alert-danger'>Username is already in use, try another username.</div>";
            }
        }
        ?>
<table class="table">
        <thead>
            <tr>
                <th>USERNAME ID</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>LEVEL</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <?php include 'koneksi.php'; ?>
        <tr>
                <th><input class="form-control" placeholder="Username ID" name="uid" type="number"></th>
                <th><input class="form-control" placeholder="Username" name="username"></th>
                <th><input class="form-control" placeholder="Password" name="password"></th>
                <th>
                <select class="form-select" name="level">
                <option>user</option>
                <option>admin</option>
                </select>
                </th>
                <th><button type="submit" class="btn btn-primary">Submit</button></th>
            </tr>
</table>
</form>
<h1>REMOVE USER</h1>
<div class="accordion" id="removeUserAccordion">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Remove User
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#removeUserAccordion">
            <div class="accordion-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>USERNAME ID</th>
                            <th>USERNAME</th>
                            <th>PASSWORD</th>
                            <th>LEVEL</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <?php
                    $query = mysqli_query($koneksi, "select * from user");
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <th><?php echo $no++ ?></th>
                        <th><?php echo $data[0] ?></th>
                        <th><?php echo $data[1] ?></th>
                        <th><?php echo $data[2] ?></th>
                        <th><?php echo $data[3] ?></th>
                        <th>
                            <a href="admin/user/update.php?id_kelas=<?php echo $data[0] ?>" class="btn btn-warning">Update</a>
                            <a href="admin/user/action-delete.php?uid=<?php echo $data[0] ?>" class="btn btn-danger">Delete</a>
                        </th>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div> 

<h1>ADD PRODUCT</h1>
<form method="POST" action="admin/product/action-create.php" enctype="multipart/form-data">
    <table class="table">
        <thead>
            <tr>
                <th>PRODUCT IMAGE</th>
                <th>PRODUCT NAME</th>
                <th>TYPE</th>
                <th>SIZE</th>
                <th>PRICE</th>
                <th>DESCRIPTION</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tr>
            <td><input class="form-control" name="productImage" type="file" required></td>
            <td><input class="form-control" name="productName" required></td>
            <td><input class="form-control" name="productType" required></td>
            <td>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="productSize[]" value="39">
                    <label class="form-check-label" for="inlineCheckbox1">39</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="productSize[]" value="40">
                    <label class="form-check-label" for="inlineCheckbox2">40</label>
                </div>
                <!-- Add more checkboxes as needed -->
            </td>
            <td><input class="form-control" name="productPrice" placeholder="e.g., 60000 for RP 60,000.00" type="number" required></td>
            <td><textarea class="form-control" name="productDesc" required></textarea></td>
            <td><button type="submit" class="btn btn-primary">Submit</button></td>
        </tr>
    </table>
</form>

<h1>REMOVE PRODUCT</h1>
<div class="accordion" id="removeProductAccordion">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                Remove Product
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#removeProductAccordion">
            <div class="accordion-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>PRODUCT IMAGE</th>
                            <th>PRODUCT NAME</th>
                            <th>TYPE</th>
                            <th>SIZE</th>
                            <th>PRICE</th>
                            <th>DESCRIPTION</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Fetch and display product details from database
                        include 'koneksi.php';
                        $query = mysqli_query($koneksi, "SELECT * FROM product");
                        while ($data = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                            <td><?php echo$data['id_product']?></td>
                            <td><?php echo "<img src='admin/product/{$data['productImage']}' style='width: 220px;'>" ?></td>
                            <td><?php echo$data['productName']?></td>
                            <td><?php echo$data['productType']?></td>
                            <td><?php echo$data['productSize']?></td>
                            <td><?php echo$data['productPrice']?></td>
                            <td><?php echo$data['productDesc']?></td>
                            <td>
                            <a href="admin/product/action-update.php?id_product=<?php echo $data[0] ?>" class="btn btn-warning">Update</a>
                            <a href="admin/product/action-delete.php?id_product=<?php echo $data[0] ?>" class="btn btn-danger">Delete</a>
                            </td>
                            </tr>
                      <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
