<div class="card mb-4">
<a href="?p=tambahuser" class='btn btn-success'>tambah user</a>

                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data User
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>no</th>
                                            <th>id</th>
                                            <th>username</th>
                                            <th>password</th>
                                            <th>level</th>
                                            <th>control</th>
                                        </tr>
                                    </thead>
                                    
                                    <?php 
		include '../../config/koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from user");
		while($d = mysqli_fetch_array($data)){
			?>
                                    <tbody>
                                        <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $d['id']; ?></td>
                                        <td><?php echo $d['username']; ?></td>
                                        <td><?php echo $d['password']; ?></td>
                                        <td><?php echo $d['level']; ?></td>
                                        <td>
                                        <a href="?p=updateuser&id=<?php echo $d['id'];?>">EDIT</a>
                                        <a href="../../function/admin/user/delete.php?id=<?php echo $d['id'];?>">HAPUS</a>
				</td>
                <?php }?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        