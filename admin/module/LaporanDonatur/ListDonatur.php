

	<!-- main -->
	<main class="main main--ml-sidebar-width">
		<div class="row">
			<header class="main__header col-12 mb-2">
				<div class="main__title">
					<h4>Daftar Donatur</h4>
					<ul class="breadcrumb">
				
					</ul>
                    <a href="<?php echo $base_url; ?>admin/module/LaporanDonatur/CetakDonatur.php">
		<button class="btn btn-primary">Cetak Laporan</button></a>
				</div>				
			</header>

			<div class="col-sm-6">
			<div class="row">
				<div class="col-12">
				<!-- main__box -->
				</div>

		
			
			</div><!-- row -->
			</div>

		
		

				<div class="col-12">
					<section class="content-header">
					<table class= "table table-hover">
						<th>Nama Donatur</th>
						<th>Alamat </th>
						<th>Nomor Telepon </th>
                        <th>Email </th>
					   <?php
    // include "../../../../lib/config.php";
    // include "../../../../lib/koneksi.php";
    $kuerikategori=mysqli_query ($koneksi, "select * from tbl_donatur");
    while ($kp=mysqli_fetch_array($kuerikategori)){
		?>
					<tr>
						<td><?php echo $kp['nama_lengkap']; ?></td>
                        <td><?php echo $kp['alamat'];?></td>
                        <td><?php echo $kp['no_telp'];?></td>
                        <td><?php echo $kp['email'];?></td>
						<div class ="btn-group">
						<a  href ="<?php echo $admin_url; ?>adminweb.php?module=edit_donasi&id_donasi=<?php echo $kp ['id_program']; ?>"> 
												<a href ="<?php echo $admin_url; ?>module/donasi/aksi_hapus.php?id_donasi=<?php echo $kp ['id_program']; ?>"
												onClick="return confirm ('Anda yakin ingin menghapus data ini')">
												</button>
											</a>
												 <!-- class="btn btn-danger"><i class='fa fa-power-off'></i></button></a> -->
											
						</div>
						</td>
					</tr>
					<?php 
					}?>
				
					</table>
					
					<div class = "box-footer">
						<br>
					</section><!-- main__box -->
				</div>
			</div><!-- row -->
			</div>
		</div><!-- row -->
	</main>

