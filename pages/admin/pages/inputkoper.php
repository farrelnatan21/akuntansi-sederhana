<?php
include '../../config/koneksi.php';
$sql= "SELECT * FROM perkiraan";
$result = mysqli_query($koneksi, $sql);
$option ="";
while($row = mysqli_fetch_assoc($result)){
    $option .="<option value={$row['perkiraan_kode']}>{$row['perkiraan_nama']}</option>";
}
?>
<h1><b>INPUT TRANSAKSI</b></h1>
<form class="row g-3" action="../../function/admin/transaksi/inputtransaksi.php" method="post">
<div class="col-md-4">
    <label for="inputState" class="form-label">Kode Transaksi</label>
    <select id="inputState" class="form-select" name="transaksi_perkiraan_id">
      
      <?php echo $option; ?>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Jenis Transaksi</label>
    <select id="inputState" class="form-select" name="transaksi_jenis">
    <option value="1">DEBIT</option>
    <option value="2">KREDIT</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">nominal</label>
    <input type="number" class="form-control" id="inputZip" name="transaksi_nominal">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">tanggal</label>
    <input type="date" class="form-control" id="inputZip" name="transaksi_tanggal">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">simpan</button>
  </div>
</form>