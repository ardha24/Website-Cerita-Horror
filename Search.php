<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <!-- CSS -->
    <link rel="stylesheet" href="asset/More.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Caveat:wght@500&family=Gloria+Hallelujah&family=Josefin+Sans:wght@600&family=Lobster&family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&family=Sacramento&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <div class="container">
        <div class="header">
            <div class="logo">
            <a href="Beranda.php"><img src="img/Group 18.png" width="50px" height="50px"></a>
            </div>
            <div class="title">Horror Collection</div>
            <div class="menu">
                <!-- Search -->
                <form class="search" method="get" action="Search.php" style="text-align: center; ">
                    <input type="search" placeholder="Search" aria-label="Search" name="querry">
                    <button type="submit">Cari</button>
                    <!-- <button type="submit" class="btn-nav"><img src="img/search.png" width="28px" height="28px" class="icon3"></button> -->
                </form>
                <!-- End Search -->
                <a href="Upload.html" class="btn-nav"><img src="img/more.png" width="28px" height="28px" class="icon1"></a>
                <!-- <a href="Upload.html" class="btn-nav"><img src="img/search.png" width="28px" height="28px" class="icon1"></a> -->
                <a href="Logout.php" class="btn-nav"><img src="img/skull.png" width="28px" height="28px" class="icon2"></a>
                <button class="btn-nav"><img src="img/Group 18.png" width="30px" height="30px" class="icon2"></button>
            </div>
        </div>
    </div>
    <!-- End Navbar -->
    <!-- Content -->
     <!-- Content 1 -->
     <div class="body1">
        <div class="container">
            <div class="container1 ">
                <div class="content">
               <!-- <div class="desc1">
                   <H2>Hot Stories</H2>
               </div> -->
               <div class="wrapper ">
                  
                
             
           <?php
           $search = $_GET['querry'];
           $query = mysqli_query($koneksi,"SELECT * FROM dt_buku WHERE judul LIKE '%$search%'");
           while($row = mysqli_fetch_array($query)){
           ?>   
                <div class="body-item ">
                        <div class="image">
                            <img src="img/cover/<?php echo $row['thumb'] ?>" height="128" width="108">
                        </div>
                        <h4><?php echo $row['judul'] ?></h4>
                        <a href="book/<?php echo $row['file'] ?>" class="btn-baca">Baca</a>
                        <!-- <a href="" class="btn-tambah">+</a> -->
                    </div>   
            <?php } ?> 
        </div>
     </div>
     </div>
     </div>
     </div>
     <!-- End Content 1 -->
    
</body>
</html>