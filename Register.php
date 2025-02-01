<?php
include 'koneksi.php';
// date_default_timezone_set("Asia/Bangkok");
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
    <title>Halaman Register</title>
</head>
<body background="img/photo-1622318614813-8f27b0ae8ce3.webp" style="background-repeat: no-repeat; background-size: cover;">
    <div class="form">
        <a href="Discover.php" class="cls" ><img src="img/close.png" height="18px" width="18px" style="margin: 10px; margin-left: 350px; margin-top: 20px;"></a>
        <h1>SIGN UP</h1>
        <form method="post">
            <div class="txt-field">
                <input type="email" name="email" required>
                <span></span>
                <label>E-mail</label>
            </div>
            <div class="txt-field">
                <input type="text" name="nama" required>
                <span></span>
                <label>Name</label>
            </div>
            <div class="txt-field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" value="REGISTER" name="REGISTER" class="btn_reg">
            <!-- <a href="UAS 2.html" class="btn_reg" value">
                LOGIN
            </a> -->
            <div class="login_link">
                Already Had Account? <a href="Login.php">Sign In</a>
            </div>

            <!-- PHP -->
            <?php
          
            if(isset($_POST['REGISTER'])){

                $nama = $_POST['nama'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                // $REGISTER = $_POST['REGISTER']

                $insert = mysqli_query($koneksi, "INSERT INTO user (email, nama, password) values('$email','$nama','$password')");

                    if($insert){
                    echo"Anda Berhasil Daftar";
                    header('location:Login.php');
                    }else{
                        echo"Anda Gagal, Silahkan Cek Kelengkapan data";
                    }     
            }

            // $query = "INSERT INTO user VALUES ('$nama','$email','$password','$REGISTER')";
            // mysqli_query($conn,$query);
            
            ?>  

            <!-- End PHP -->
        </form>
    </div>   
    
</body>
</html>
