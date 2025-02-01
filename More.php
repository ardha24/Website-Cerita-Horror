<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selengkapny</title>
    <!-- CSS -->
    <link rel="stylesheet" href="asset/More.css">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Caveat:wght@500&family=Gloria+Hallelujah&family=Josefin+Sans:wght@600&family=Lobster&family=Pacifico&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&family=Sacramento&display=swap" rel="stylesheet">
     <!-- Pop Up Keluar -->
     <script>
    function tampilkanPopUp() {
      var result = confirm("Apakah Anda Ingin Keluar?");

      if (result) {
        // Pergi ke halaman berikutnya
        window.location.href = "Discover.php";
      } else {
        // Tutup pop-up
        window.close();
      }
    }
  </script>
    <!-- End Pop Up -->
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
                <a href="Upload.php" class="btn-nav"><img src="img/more.png" width="28px" height="28px" class="icon1"></a>
                <!-- <a href="Upload.html" class="btn-nav"><img src="img/search.png" width="28px" height="28px" class="icon1"></a> -->
                <!-- <a href="Logout.php" class="btn-nav"><img src="img/skull.png" width="28px" height="28px" class="icon2"></a> -->
                <button onclick="tampilkanPopUp()" class="btn-nav"><img src="img/skull.png" width="28px" height="28px" class="icon2"></button>
                <button class="btn-nav"><img src="img/Group 18.png" width="30px" height="30px" class="icon2"></button>
            </div>
        </div>
    </div>
    <!-- End Navbar -->
    <!-- Content -->
    <div class="back">
        <a href="Beranda.php" class="back" style="color: red; text-decoration: none; font-weight: 300; margin: 30px; margin-left: 100px; font-size: 20px;"
        >Back</a>
    </div>
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
                    $query = mysqli_query($koneksi, "SELECT * FROM dt_buku ");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                   <div class="body-item ">
                       <div class="image">
                           <img src="img/cover/<?php echo $row['thumb'] ?>" height="128" width="108">
                       </div>
                       <h4><?php echo $row['judul'] ?></h4>
                       <a href="book/<?php echo $row['file'] ?>" class="btn-baca">Baca</a>
                       <a href="Delete.php?id=<?php echo $row['idbuku'] ?>" class="btn-tambah"><img src="img/bin.png" width="12px" height="12px"></a>
                   </div>
                   <?php } ?>
                   <div class="body-item ">
                       <div class="image">
                           <img src="https://images.unsplash.com/photo-1635488129873-ddacde2c1927?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=465&q=80" height="128" width="108">
                       </div>
                       <h4>Gadis Misterius</h4>
                       <a href="book/GADIS MISTERIUS.pdf" class="btn-baca">Baca</a>
                       <a href="Delete.php" class="btn-tambah"><img src="img/bin.png" width="12px" height="12px"></a>
                   </div>
                   

                   <!-- <img src="img/next.png" width="50px" height="50px" class="next"> -->
                </div>
           </div>          
        </div>
     </div>
     <!-- End Content 1 -->
    
</body>
</html>