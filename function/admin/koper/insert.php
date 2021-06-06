<?php
include '../../../config/koneksi.php';


$perkiraan_kode = $_POST['perkiraan_kode'];
$perkiraan_nama =$_POST['perkiraan_nama'];
mysqli_query($koneksi,"insert into perkiraan values('$perkiraan_kode','$perkiraan_nama')");
header('location:../../../pages/admin/?p=koper');
?>