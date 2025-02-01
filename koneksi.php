<?php
$koneksi = mysqli_connect('localhost','root','','db_ar_horror');

if(!$koneksi){
    echo "belum terkoneksi dengan database, cek typo";
}
?>