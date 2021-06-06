<?php
include '../../config/koneksi.php';
$edit=$koneksi->query("SELECT * FROM user where id='$_GET[id]'");
$e=mysqli_fetch_array($edit);
?>
<form name="form_mahasiwa" action="../../function/admin/user/update.php" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label for="NIM">id_user</label>
    <input type="hidden" name="id" value="<?php echo $e['id'];?>">
    <input type="text" class="form-control" id="nim" placeholder="Nomor Indux Mahasiswa" name="id_user" required value="<?php echo $e ['id'];?>">
  </div>

  <div class="form-group">
    <label for="Nama">Username</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="username" required value="<?php echo $e ['username'];?>">
  </div>

  <div class="form-group">
    <label for="Nama">Password</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="password" required value="<?php echo $e ['password'];?>">
  </div>
  
  <div class="form-group">
    <label for="Nama">Level</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="level" required value="<?php echo $e ['level'];?>">
  </div>

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>


</form>