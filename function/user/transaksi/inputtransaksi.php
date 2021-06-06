<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$transaksi_tanggal=$_POST['transaksi_tanggal'];
$transaksi_perkiraan_id=$_POST['transaksi_perkiraan_id'];
$transaksi_nominal=$_POST['transaksi_nominal'];
$transaksi_jenis=$_POST['transaksi_jenis'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into transaksi values('','$transaksi_tanggal','$transaksi_perkiraan_id','$transaksi_nominal','$transaksi_jenis')");
 
// mengalihkan halaman kembali ke index.php
header("location:../../../pages/admin/index.php?p=inputkoper");
 
?>