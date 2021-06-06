<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data id yang di kirim dari url
$perkiraan_kode = $_GET['perkiraan_kode'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE from perkiraan where perkiraan_kode='$perkiraan_kode'");
 
// mengalihkan halaman kembali ke index.php
header("location:../../../pages/admin/?p=koper");
 
?>