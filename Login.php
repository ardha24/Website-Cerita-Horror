<?php
include 'koneksi.php';
session_start();
error_reporting(0);

if (isset($_SESSION['email'])){
    header("location:Beranda.php");
}

if(isset($_POST['LOGIN'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cek = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email' 
    AND password = '$password'");

    if($cek->num_rows > 0){
        header("location:Beranda.php");
    }
    else{
        echo "<script>alert('Email atau Password Anda Salah')</script>";
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/Login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Caveat:wght@500&family=Creepster&family=Gloria+Hallelujah&family=Josefin+Sans:wght@600&family=Lobster&family=Montserrat+Alternates:wght@400;500&family=Montserrat:wght@400;500;700&family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&family=Sacramento&display=swap" rel="stylesheet">
    <title>Halaman Login</title>
</head>
<body background="img/photo-1622318614813-8f27b0ae8ce3.webp" style="background-repeat: no-repeat; background-size: cover;">
    <div class="form">
        <a href="Discover.php" class="cls" ><img src="img/close.png" height="18px" width="18px" style="margin: 10px; margin-left: 350px; margin-top: 20px;"></a>
        <h1>SIGN IN</h1>
        <form method="post">
            <div class="txt-field">
                <input type="email" name="email" required>
                <span></span>
                <label>E-mail</label>
            </div>
            <div class="txt-field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" name="LOGIN" value="LOGIN" class="btn_reg">
            <!-- <a href="UAS 2.html" class="btn_reg">
                REGISTER
            </a> -->
            <div class="login_link">
                Didn't Have Any Account? <a href="Register.php">Sign Up</a>
            </div>

            <!-- PHP -->
            <!-- End PHP -->
        </form>
    </div>   
</body>
</html>
