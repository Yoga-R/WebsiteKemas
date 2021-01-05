

	<!-- main -->
	<main class="main main--ml-sidebar-width">
		<div class="row">
			<header class="main__header col-12 mb-2">
				<div class="main__title">
					<h4>Kategori</h4>
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
						<th>Kategori</th>
       				<th style="width: 5%">Aksi</th>
					   <?php
    include "../lib/config.php";
    include "../lib/koneksi.php";
    $kuerikategori=mysqli_query ($koneksi, "select * from tbl_kategori");
    while ($kategori=mysqli_fetch_array($kuerikategori)){
		?>
					<tr>
						<td><?php echo $kategori['nama_kategori']; ?></td>
						<td>

						<div class ="btn-group" style="margin: right">
						<a  href ="<?php echo $admin_url; ?>adminweb.php?module=edit_kategori&id_kategori=<?php echo $kategori ['id_kategori']; ?>"> <button class="btn btn-secondary"><i class='fa fa-pencil'></i>
												</button></a>
												<a href ="<?php echo $admin_url; ?>module/kategori/aksi_hapus.php?id_kategori=<?php echo $kategori ['id_kategori']; ?>"
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
		<a href="<?php echo $base_url; ?>admin/adminweb.php?module=tambah_kategori">
		<button class="btn btn-primary">Tambah Kategori</button></a>
					</section><!-- main__box -->
				</div>
			</div><!-- row -->
			</div>
		</div><!-- row -->
	</main>

