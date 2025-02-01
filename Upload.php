<?php
include 'koneksi.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Cerita</title>
    <!-- CSS -->
    <link rel="stylesheet" href="asset/Upload.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Caveat:wght@500&family=Creepster&family=Gloria+Hallelujah&family=Josefin+Sans:wght@600&family=Lobster&family=Montserrat+Alternates:wght@400;500&family=Montserrat:wght@400;500;700&family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&family=Sacramento&display=swap" rel="stylesheet">

</head>
<body background="img/background.png" style="background-repeat: no-repeat; background-size: cover;">

    <div class="container">
        <div class="upload-form">
             <a href="Beranda.php" class="cls" ><img src="img/close.png" height="18px" width="18px" style="margin: 20px; margin-left: 380px;"></a>
            <h1>UPLOAD CERITAMU</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <table class="data">
                    <thead></thead>
                    <tr>
                        <td>Judul</td>
                        <td> : </td>
                        <span></span>
                        <td> <input type="text" name="judul"> </td>
                    </tr>
                    <tr>
                        <td>Thumbnail</td>
                        <td> : </td>
                        <span></span>
                        <td> <input type="file" name="gambar" class="file"> </td>
                    </tr>
                    <tr>
                        <td>File Cerita</td>
                        <td> : </td>
                        <span></span>
                        <td> <input type="file" name="file" class="file"> </td>
                    </tr>
                    <tr>
                        <td> </td>
                    </tr>
                </table>
                <input type="submit" value="KIRIM" name="kirim" class="button">
                <?php
                    if(isset($_POST['kirim'])){
                        $judul = $_POST['judul'];
                        $nama_thumb = $_FILES['gambar']['name'];
                        $sumber_thumb = $_FILES['gambar']['tmp_name'];
                        $folder_thumb = './img/cover/';
                        $nama_file = $_FILES['file']['name'];
                        $sumber_file = $_FILES['file']['tmp_name'];
                        $folder_file = './book/';

                        move_uploaded_file($sumber_thumb,$folder_thumb.$nama_thumb);
                        move_uploaded_file($sumber_file,$folder_file.$nama_file);

                        $upload = mysqli_query($koneksi, "INSERT INTO dt_buku (idbuku,judul,thumb,file) values (NULL,'$judul','$nama_thumb','$nama_file')");
                        
                        if($upload){
                            echo"Selamat Data Berhasil Dimasukkan";
                            header("Location:More.php");
                        }else{
                            echo"Gagal Dimasukkan";
                        }
               
                    }
                ?>
            </form>
        </div>
    </div>
</body>
</html>