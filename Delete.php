<?php
include 'koneksi.php';

$idbuku = $_GET['id'];
$query =  "DELETE FROM dt_buku WHERE idbuku = ".$idbuku;
$delete = mysqli_query($koneksi, $query);

    if($delete){
        echo 'Berhasil Menghapus';
    } else {
        echo 'Gagal Menghapus';
    }

?>