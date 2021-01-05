

	<!-- main -->
	<main class="main main--ml-sidebar-width">
		<div class="row">
			<header class="main__header col-12 mb-2">
				<div class="main__title">
					<h4>Program Donasi</h4>
					<ul class="breadcrumb">
				
					</ul>
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
						<th>Nama Program</th>
       				<th style="width: 5%">Aksi</th>
					   <?php
    include "../lib/config.php";
    include "../lib/koneksi.php";
	$kueriprogram=mysqli_query ($koneksi, "select tbl_program.*,tbl_kategori.*
	FROM tbl_program
LEFT JOIN tbl_kategori ON tbl_program.id_kategori = tbl_kategori.id_kategori");
    while ($kp=mysqli_fetch_array($kueriprogram)){
		?>
					<tr>
						<td><?php echo $kp['nama_program']; ?></td>
						<td>

						<div class ="btn-group">
						<a  href ="<?php echo $admin_url; ?>adminweb.php?module=edit_donasi&id_donasi=<?php echo $kp ['id_program']; ?>"> <button class="btn btn-secondary"><i class='fa fa-pencil'></i>
												</button></a>
												<a href ="<?php echo $admin_url; ?>module/donasi/aksi_hapus.php?id_donasi=<?php echo $kp ['id_program']; ?>"
												onClick="return confirm ('Anda yakin ingin menghapus data ini')"><button class="btn btn-danger"><i class='fa fa-power-off'></i>
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
		<a href="<?php echo $base_url; ?>admin/adminweb.php?module=tambah_donasi">
		<button class="btn btn-primary">Tambah Program</button></a>
					</section><!-- main__box -->
				</div>
			</div><!-- row -->
			</div>
		</div><!-- row -->
	</main>

