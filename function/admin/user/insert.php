<?php
include '../../../config/koneksi.php';


$username = $_POST['username'];
$universitas = $_POST['universitas'];
$password = md5($_POST['password']);
mysqli_query($koneksi,"insert into user values('','$username','$password','user')");
header('location:../../../pages/admin/?p=user');
?>