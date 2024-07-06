<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../assets/bootstrap/dist/js/bootstrap.js">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="../../assets/style/bootstrap.min.css">
    <title>Login - Chealsea Footwear</title>
</head>
    <div class="container">
        <div class="d-flex justify-content-center">
        <form method="POST" action="cek-login.php" class="needs-validation">
        <img src="../../assets/brand/logo.svg" alt="logo" width="50px" class="shadow-light my-4">
        <h2 class="mb-4">Enter your account details</h2>
         <?php 
         if (isset($_GET['pesan'])){
             if($_GET['pesan']=="gagal"){
                 echo "<div class='alert alert-danger'>Username atau Password salah!</div>";
             }
         }
        
      ?>
         <label>Username</label>
        <input id="username" type="text" class="form-control mt-2 mb-4" name="username" tabindex="1" placeholder="Username" autofocus>
        <label>Password</label>
        <input id="password" type="password" class="form-control mt-2" name="password" tabindex="1" placeholder="Password" autofocus>
        <p class="mt-4">By continuing, I agree <a href="#" class="text-black ">Privacy Policy</a> <br>
            and <a href="#"  class="text-black">Terms of Use</a>.</p>
        <div class="d-flex text-end justify-content-between align-items-center">
        <button type="submit" class="btn bg-black text-light rounded-5 fw-medium px-4 py-2 mt-3" class="text-center mb-3">Continue</button>
        <a href="../daftar/auth-daftar.php" class="mt-4 text-black fw-medium">Don't have an account yet?</a>  
        </div> 
    </form>
</body>
</html>
