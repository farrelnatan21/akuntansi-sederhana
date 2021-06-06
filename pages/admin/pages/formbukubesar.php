<?php
include '../../config/koneksi.php';
$sql= "SELECT * FROM perkiraan";
$result = mysqli_query($koneksi, $sql);
$option ="";
while($row = mysqli_fetch_assoc($result)){
    $option .="<option value={$row['perkiraan_kode']}>{$row['perkiraan_nama']}</option>";
}
?>
<h1><b>FORM BUKU BESAR</b></h1>
<form class="row g-3" action="?p=display" method="post">
<div class="col-md-4">
    <label for="inputState" class="form-label">Kode Transaksi</label>
    <select id="inputState" class="form-select" name="option_kode">
      
      <?php echo $option; ?>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">tanggal awal</label>
    <input type="date" class="form-control" id="inputZip" name="transaksi_tanggal_awal">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">tanggal akhir</label>
    <input type="date" class="form-control" id="inputZip" name="transaksi_tanggal_akhir">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">simpan</button>
  </div>
</form>