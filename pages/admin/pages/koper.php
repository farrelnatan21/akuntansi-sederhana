<div class="card mb-4">
<a href="?p=tambahkoper" class='btn btn-success'>tambah perkiraan</a>

                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data User
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>no</th>
                                            <th>kode perkiraan</th>
                                            <th>nama perkiraan</th>
                                        </tr>
                                    </thead>
                                    
                                    <?php 
		include '../../config/koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from perkiraan");
		while($d = mysqli_fetch_array($data)){
			?>
                                    <tbody>
                                        <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $d['perkiraan_kode']; ?></td>
                                        <td><?php echo $d['perkiraan_nama']; ?></td>
                                        <td>
                                        <a href="?p=updatekoper&perkiraan_kode=<?php echo $d['perkiraan_kode'];?>">EDIT</a>
                                        <a href="../../function/admin/koper/delete.php?perkiraan_kode=<?php echo $d['perkiraan_kode'];?>">HAPUS</a>
				</td>
                <?php }?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        