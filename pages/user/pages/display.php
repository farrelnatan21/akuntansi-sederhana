<?php

include '../../config/koneksi.php';

$kode=$_POST['option_kode'];
$transaksi_tanggal_awal=$_POST['transaksi_tanggal_awal'];
$transaksi_tanggal_akhir=$_POST['transaksi_tanggal_akhir'];

$sql="SELECT transaksi_tanggal AS Tanggal,
    IF (transaksi_jenis = 1, transaksi_nominal,'')AS debit,
    IF (transaksi_jenis = 2, transaksi_nominal,'')AS kredit,
    IF (transaksi_jenis = 1, 
    @running_total := @running_total + transaksi_nominal,@running_total := @running_total - transaksi_nominal) AS s_debit
    from transaksi join (select @running_total := 0) r 
    where transaksi_tanggal between '$transaksi_tanggal_awal'AND'$transaksi_tanggal_akhir'
    order by transaksi_tanggal";

    $query_trans= mysqli_query($koneksi,$sql);
    if (!$query_trans) {
        die("QUERY GAGAL".mysqli_error($koneksi));
    }
    echo"<div class='container col-6'>";
    echo"<table class='table table-sm table-striped mb-5'>";
    echo"<thead>";
    echo"<tr>";
    echo"<th> </th>";
    echo"<th> </th>";
    echo"<th> </th>";
    echo'<th colspan="2">saldo</th>';
    echo"</tr>";
    echo"<tr>";
    echo"<th>tanggal</th>";
    echo"<th>debit</th>";
    echo"<th>kredit</>";
    echo"<th>debit</th>";
    echo"<th>kredit</>";
    echo"</tr>";
    echo"<tbody>";
    while($row=mysqli_fetch_array($query_trans)){
        echo"<tr>";
            echo"<td>{$row['Tanggal']}</td>";
            echo"<td>{$row['debit']}</td>";
            echo"<td>{$row['kredit']}</td>";
            echo"<td>{$row['s_debit']}</td>";
        echo"</tr>";
    }
    echo"</tbody>";
    echo"</thead>";
    echo"</table>";
?>