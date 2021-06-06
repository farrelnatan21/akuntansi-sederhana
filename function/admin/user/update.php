<?php 
// koneksi database
include '../../../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$username = $_POST['username'];
$password = md5($_POST['password']);

// update data ke database
mysqli_query($koneksi,"update user set username='$username', password='$password', level='user' where id='$id'");

header("location:../../../pages/admin/?p=user");
 
?>