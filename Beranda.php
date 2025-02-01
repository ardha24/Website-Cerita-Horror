
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Buku</title>
    <link rel="stylesheet" href="asset/Beranda.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="items/unpkg.com_swiper@8.4.7_swiper-bundle.min.css">
    <!-- End Swiper -->
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
                <!-- <a onmouseclick="alert('Keluar Dari Halaman')" href="Logout.php" class="btn-nav"><img src="img/skull.png" width="28px" height="28px" class="icon2"></a> -->
                <button onclick="tampilkanPopUp()" class="btn-nav"><img src="img/skull.png" width="28px" height="28px" class="icon2"></button>
                <button class="btn-nav"><img src="img/Group 18.png" width="30px" height="30px" class="icon2"></button>
            </div>
        </div>
    </div>
    <!-- End Navbar -->
    <!-- Banner -->
    <div class="banner">
        <div class="container1">
            <div class="banner-section">
                <img src="img/Group 1.png" width="1000px" height="475px" class="img-bnr">
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <!-- Overlay -->

    <!-- Body 1 -->
    <div class="body1">
        <div class="container">
            <!-- Content 1 -->
            <div class="container1 swiper">
                <div class="content">
               <div class="desc1">
                   <H2>Hot Stories</H2>
               </div>
               <div class="wrapper swiper-wrapper">
                   <div class="body-item swiper-slide">
                       <div class="image">
                           <img src="https://images.unsplash.com/photo-1542691646-b06e145f7a95?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" height="128" width="108">
                       </div>
                       <h4>Santet Kematian</h4>
                       <a href="book/SANTET KEMATIAN.pdf" class="btn-baca">Baca</a>
                       <!-- <a href="" class="btn-tambah">+</a> -->
                   </div>
                   <div class="body-item swiper-slide">
                       <div class="image">
                           <img src="https://images.unsplash.com/photo-1635488129873-ddacde2c1927?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=465&q=80" height="128" width="108">
                       </div>
                       <h4>Gadis Misterius</h4>
                       <a href="book/GADIS MISTERIUS.pdf" class="btn-baca">Baca</a>
                       <!-- <a href="" class="btn-tambah">+</a> -->
                   </div>
                   <div class="body-item swiper-slide">
                       <div class="image">
                           <img src="https://images.unsplash.com/photo-1601513445506-2ab0d4fb4229?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" height="128" width="108">
                       </div>
                       <h4>Badut Berdarah</h4>
                       <a href="book/BADUT BERDARAH.pdf" class="btn-baca">Baca</a>
                       <!-- <a href="" class="btn-tambah">+</a> -->
                   </div>
                   <div class="body-item swiper-slide">
                       <div class="image">
                           <img src="https://images.unsplash.com/photo-1553465528-5a213ccc0c7b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=398&q=80" height="128" width="108">
                       </div>
                       <h4>Darkest Though</h4>
                       <a href="book/MY DARKEST THOUGH.pdf" class="btn-baca">Baca</a>
                       <!-- <a href="" class="btn-tambah">+</a> -->
                   </div>
                   <div class="body-item swiper-slide">
                       <div class="image">
                           <img src="https://images.unsplash.com/photo-1633555690973-b736f84f3c1b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" height="128" width="108">
                       </div>
                       <h4>Rumah Bekas Kuburan</h4>
                       <a href="book/RUMAH BEKAS KUBURAN.pdf" class="btn-baca">Baca</a>
                       <!-- <a href="" class="btn-tambah">+</a> -->
                   </div>
                   <div class="body-item swiper-slide">
                       <div class="image">
                           <img src="https://images.unsplash.com/photo-1500398925958-b224455d0828?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" height="128" width="108">
                       </div>
                       <h4>Rumah Angker</h4>
                       <a href="book/RUMAH ANGKER.pdf" class="btn-baca">Baca</a>
                       <!-- <a href="" class="btn-tambah">+</a> -->
                   </div>
                   <div class="body-item swiper-slide">
                       <div class="image">
                           <img src="https://images.unsplash.com/photo-1611255518888-30feae5f15b4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=410&q=80" height="128" width="108">
                       </div>
                       <h4>Mati Suri</h4>
                       <a href="book/MATI SURI.pdf" class="btn-baca">Baca</a>
                       <!-- <a href="" class="btn-tambah">+</a> -->
                   </div>
                   <div class="body-item swiper-slide">
                        <div class="image">
                            <img src="https://images.unsplash.com/photo-1567263361507-83f755d9fa97?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=388&q=80" height="128" width="108">
                        </div>
                        <h4>Deadly Magic</h4>
                        <a href="book/DEADLY MAGIC.pdf" class="btn-baca">Baca</a>
                        <!-- <a href="" class="btn-tambah">+</a> -->
                    </div>
                    <div class="body-item swiper-slide">
                        <div class="image">
                            <img src="https://images.unsplash.com/photo-1537281000-028bad8dc58d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=435&q=80" height="128" width="108">
                        </div>
                        <h4>Mata Batin</h4>
                        <a href="book/MATA BATIN.pdf" class="btn-baca">Baca</a>
                        <!-- <a href="" class="btn-tambah">+</a> -->
                    </div>
                    <div class="body-item swiper-slide">
                        <div class="image">
                            <img src="https://images.unsplash.com/photo-1509401238785-48c8e54d23f8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" height="128" width="108">
                        </div>
                        <h4>Pembunuh Malam</h4>
                        <a href="book/PEMBUNUH MALAM.pdf" class="btn-baca">Baca</a>
                        <!-- <a href="" class="btn-tambah">+</a> -->
                    </div>
                    <div class="body-item swiper-slide">
                        <div class="image">
                            <img src="https://images.unsplash.com/photo-1611787640592-ebf78080d96e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" height="128" width="108">
                        </div>
                        <h4>Boneka Terkutuk</h4>
                        <a href="book/BONEKA TERKUTUK.pdf" class="btn-baca">Baca</a>
                        <!-- <a href="" class="btn-tambah">+</a> -->
                    </div>
                   <!-- <img src="img/next.png" width="50px" height="50px" class="next"> -->
                   </div>
               </div>
               <div class="swiper-button-next swiper-naviBtn" style="color: red;"></div>
               <div class="swiper-button-prev swiper-naviBtn" style="color: red;"></div>
               <div class="swiper-pagination" style="color: red;"></div>
            </div>
             <!-- End Content 1 -->
             <!-- Content 2 -->
            <div class="container1 swiper">
                <div class="content">
                    <!-- Content 1 -->
               <div class="desc1">
                   <H2>Popular Stories</H2>
               </div>
               <div class="wrapper swiper-wrapper">
                   <div class="body-item swiper-slide">
                       <div class="image">
                           <img src="https://images.unsplash.com/photo-1542691646-b06e145f7a95?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" height="128" width="108">
                       </div>
                       <h4>Santet Kematian</h4>
                       <a href="book/SANTET KEMATIAN.pdf" class="btn-baca">Baca</a>
                       <!-- <a href="" class="btn-tambah">+</a> -->
                   </div>
                   <div class="body-item swiper-slide">
                       <div class="image">
                           <img src="https://images.unsplash.com/photo-1635488129873-ddacde2c1927?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=465&q=80" height="128" width="108">
                       </div>
                       <h4>Gadis Misterius</h4>
                       <a href="book/GADIS MISTERIUS.pdf" class="btn-baca">Baca</a>
                       <!-- <a href="" class="btn-tambah">+</a> -->
                   </div>
                   <div class="body-item swiper-slide">
                       <div class="image">
                           <img src="https://images.unsplash.com/photo-1601513445506-2ab0d4fb4229?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" height="128" width="108">
                       </div>
                       <h4>Badut Berdarah</h4>
                       <a href="book/BADUT BERDARAH.pdf" class="btn-baca">Baca</a>
                       <!-- <a href="" class="btn-tambah">+</a> -->
                   </div>
                   <div class="body-item swiper-slide">
                       <div class="image">
                           <img src="https://images.unsplash.com/photo-1553465528-5a213ccc0c7b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=398&q=80" height="128" width="108">
                       </div>
                       <h4>Darkest Though</h4>
                       <a href="book/MY DARKEST THOUGH.pdf" class="btn-baca">Baca</a>
                       <!-- <a href="" class="btn-tambah">+</a> -->
                   </div>
                   <div class="body-item swiper-slide">
                       <div class="image">
                           <img src="https://images.unsplash.com/photo-1633555690973-b736f84f3c1b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" height="128" width="108">
                       </div>
                       <h4>Rumah Bekas Kuburan</h4>
                       <a href="book/RUMAH BEKAS KUBURAN.pdf" class="btn-baca">Baca</a>
                       <!-- <a href="" class="btn-tambah">+</a> -->
                   </div>
                   <div class="body-item swiper-slide">
                       <div class="image">
                           <img src="https://images.unsplash.com/photo-1500398925958-b224455d0828?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" height="128" width="108">
                       </div>
                       <h4>Rumah Angker</h4>
                       <a href="book/RUMAH ANGKER.pdf" class="btn-baca">Baca</a>
                       <!-- <a href="" class="btn-tambah">+</a> -->
                   </div>
                   <div class="body-item swiper-slide">
                       <div class="image">
                           <img src="https://images.unsplash.com/photo-1611255518888-30feae5f15b4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=410&q=80" height="128" width="108">
                       </div>
                       <h4>Mati Suri</h4>
                       <a href="book/MATI SURI.pdf" class="btn-baca">Baca</a>
                       <!-- <a href="" class="btn-tambah">+</a> -->
                   </div>
                   <div class="body-item swiper-slide">
                        <div class="image">
                            <img src="https://images.unsplash.com/photo-1567263361507-83f755d9fa97?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=388&q=80" height="128" width="108">
                        </div>
                        <h4>Deadly Magic</h4>
                        <a href="book/DEADLY MAGIC.pdf" class="btn-baca">Baca</a>
                        <!-- <a href="" class="btn-tambah">+</a> -->
                    </div>
                    <div class="body-item swiper-slide">
                        <div class="image">
                            <img src="https://images.unsplash.com/photo-1537281000-028bad8dc58d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=435&q=80" height="128" width="108">
                        </div>
                        <h4>Mata Batin</h4>
                        <a href="book/MATA BATIN.pdf" class="btn-baca">Baca</a>
                        <!-- <a href="" class="btn-tambah">+</a> -->
                    </div>
                    <div class="body-item swiper-slide">
                        <div class="image">
                            <img src="https://images.unsplash.com/photo-1509401238785-48c8e54d23f8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" height="128" width="108">
                        </div>
                        <h4>Pembunuh Malam</h4>
                        <a href="book/PEMBUNUH MALAM.pdf" class="btn-baca">Baca</a>
                        <!-- <a href="" class="btn-tambah">+</a> -->
                    </div>
                    <div class="body-item swiper-slide">
                        <div class="image">
                            <img src="https://images.unsplash.com/photo-1611787640592-ebf78080d96e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" height="128" width="108">
                        </div>
                        <h4>Boneka Terkutuk</h4>
                        <a href="book/BONEKA TERKUTUK.pdf" class="btn-baca">Baca</a>
                        <!-- <a href="" class="btn-tambah">+</a> -->
                    </div>
                   <!-- <img src="img/next.png" width="50px" height="50px" class="next"> -->
                   </div>
                   <!-- End Content 1 -->
               </div>
               <div class="swiper-button-next swiper-naviBtn" style="color: red;"></div>
               <div class="swiper-button-prev swiper-naviBtn" style="color: red;"></div>
               <div class="swiper-pagination" style="color: red;"></div>
            </div>
            <!-- End Content 2 -->
            <!-- Content 3 -->
            <div class="container1 swiper">
                <div class="content">
                    <!-- Content 1 -->
               <div class="desc1">
                   <H2>Your Own</H2>
                   <div class="more-page" >
                        <a href="More.php" style="text-align: left; margin-left: 1000px; margin-bottom: 30px;">More</a>
                    </div>
               </div>
               <div class="wrapper swiper-wrapper">
                   <div class="body-item swiper-slide">
                       <div class="image">
                           <img src="https://images.unsplash.com/photo-1542691646-b06e145f7a95?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" height="128" width="108">
                       </div>
                       <h4>Santet Kematian</h4>
                       <a href="book/SANTET KEMATIAN.pdf" class="btn-baca">Baca</a>
                       <!-- <a href="" class="btn-tambah">+</a> -->
                   </div>
                   <div class="body-item swiper-slide">
                       <div class="image">
                           <img src="https://images.unsplash.com/photo-1635488129873-ddacde2c1927?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=465&q=80" height="128" width="108">
                       </div>
                       <h4>Gadis Misterius</h4>
                       <a href="book/GADIS MISTERIUS.pdf" class="btn-baca">Baca</a>
                       <!-- <a href="" class="btn-tambah">+</a> -->
                   </div>
                   <div class="body-item swiper-slide">
                       <div class="image">
                           <img src="https://images.unsplash.com/photo-1601513445506-2ab0d4fb4229?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" height="128" width="108">
                       </div>
                       <h4>Badut Berdarah</h4>
                       <a href="book/BADUT BERDARAH.pdf" class="btn-baca">Baca</a>
                       <!-- <a href="" class="btn-tambah">+</a> -->
                   </div>
                   <div class="body-item swiper-slide">
                       <div class="image">
                           <img src="https://images.unsplash.com/photo-1553465528-5a213ccc0c7b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=398&q=80" height="128" width="108">
                       </div>
                       <h4>Darkest Though</h4>
                       <a href="book/MY DARKEST THOUGH.pdf" class="btn-baca">Baca</a>
                       <!-- <a href="" class="btn-tambah">+</a> -->
                   </div>
                   <div class="body-item swiper-slide">
                       <div class="image">
                           <img src="https://images.unsplash.com/photo-1633555690973-b736f84f3c1b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" height="128" width="108">
                       </div>
                       <h4>Rumah Bekas Kuburan</h4>
                       <a href="book/RUMAH BEKAS KUBURAN.pdf" class="btn-baca">Baca</a>
                       <!-- <a href="" class="btn-tambah">+</a> -->
                   </div>
                   <div class="body-item swiper-slide">
                       <div class="image">
                           <img src="https://images.unsplash.com/photo-1500398925958-b224455d0828?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" height="128" width="108">
                       </div>
                       <h4>Rumah Angker</h4>
                       <a href="book/RUMAH ANGKER.pdf" class="btn-baca">Baca</a>
                       <!-- <a href="" class="btn-tambah">+</a> -->
                   </div>
                   <div class="body-item swiper-slide">
                       <div class="image">
                           <img src="https://images.unsplash.com/photo-1611255518888-30feae5f15b4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=410&q=80" height="128" width="108">
                       </div>
                       <h4>Mati Suri</h4>
                       <a href="book/MATI SURI.pdf" class="btn-baca">Baca</a>
                       <!-- <a href="" class="btn-tambah">+</a> -->
                   </div>
                   <div class="body-item swiper-slide">
                        <div class="image">
                            <img src="https://images.unsplash.com/photo-1567263361507-83f755d9fa97?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=388&q=80" height="128" width="108">
                        </div>
                        <h4>Deadly Magic</h4>
                        <a href="book/DEADLY MAGIC.pdf" class="btn-baca">Baca</a>
                        <!-- <a href="" class="btn-tambah">+</a> -->
                    </div>
                    <div class="body-item swiper-slide">
                        <div class="image">
                            <img src="https://images.unsplash.com/photo-1537281000-028bad8dc58d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=435&q=80" height="128" width="108">
                        </div>
                        <h4>Mata Batin</h4>
                        <a href="book/MATA BATIN.pdf" class="btn-baca">Baca</a>
                        <!-- <a href="" class="btn-tambah">+</a> -->
                    </div>
                    <div class="body-item swiper-slide">
                        <div class="image">
                            <img src="https://images.unsplash.com/photo-1509401238785-48c8e54d23f8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" height="128" width="108">
                        </div>
                        <h4>Pembunuh Malam</h4>
                        <a href="book/PEMBUNUH MALAM.pdf" class="btn-baca">Baca</a>
                        <!-- <a href="" class="btn-tambah">+</a> -->
                    </div>
                    <div class="body-item swiper-slide">
                        <div class="image">
                            <img src="https://images.unsplash.com/photo-1611787640592-ebf78080d96e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" height="128" width="108">
                        </div>
                        <h4>Boneka Terkutuk</h4>
                        <a href="book/BONEKA TERKUTUK.pdf" class="btn-baca">Baca</a>
                        <!-- <a href="" class="btn-tambah">+</a> -->
                    </div>

                   <!-- <img src="img/next.png" width="50px" height="50px" class="next"> -->
                   </div>
               </div>
               <div class="swiper-button-next swiper-naviBtn" style="color: red;"></div>
               <div class="swiper-button-prev swiper-naviBtn" style="color: red;"></div>
               <div class="swiper-pagination" style="color: red;"></div>

               <!-- PHP -->
               <!-- End PHP -->
            </div>
            <!-- End Content 3 -->
            <!-- Copyright -->
            <div class="copyright">
                <p>2022 &copy; AR-Company, All Right Reserved </p>
            </div>
            <!-- End Copyright -->
        </div>
        
    </div>
    <!-- End Body 1 -->

</body>
<!-- Swiper JS -->
<script src="items/unpkg.com_swiper@8.4.7_swiper-bundle.min.js"></script>

<!-- JavaScript -->
<script src="asset/UAS.js"></script>
</html>
