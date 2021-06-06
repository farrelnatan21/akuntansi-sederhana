<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$perkiraan_kode = $_POST['perkiraan_kode'];
$perkiraan_nama = $_POST['perkiraan_nama'];

// update data ke database
mysqli_query($koneksi,"update perkiraan set perkiraan_kode='$perkiraan_kode', perkiraan_nama='$perkiraan_nama' where perkiraan_kode='$perkiraan_kode'");

header("location:../../../pages/admin/?p=koper");
 
?>