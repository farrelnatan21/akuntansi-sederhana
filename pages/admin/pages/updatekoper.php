<?php
include '../../config/koneksi.php';
$edit=$koneksi->query("SELECT * FROM perkiraan where perkiraan_kode='$_GET[perkiraan_kode]'");
$e=mysqli_fetch_array($edit);
?>
<form name="form_mahasiwa" action="../../function/admin/koper/update.php" method="post" enctype="multipart/form-data">



  <div class="form-group">
    <label for="Nama">kode</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="perkiraan_kode" required value="<?php echo $e ['perkiraan_kode'];?>">
  </div>

  <div class="form-group">
    <label for="Nama">nama</label>
    <input type="text" class="form-control" id="nama" placeholder="Nama" name="perkiraan_nama" required value="<?php echo $e ['perkiraan_nama'];?>">
  </div>
  

  <div class="form-group">
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Save</button>
  </div>


</form>