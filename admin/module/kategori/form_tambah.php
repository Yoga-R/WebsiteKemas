

	<!-- main -->
	<main class="main main--ml-sidebar-width">
		<div class="row">
			<header class="main__header col-12 mb-2">
				<div class="main__title">
					<h4>Tambah Kategori</h4>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="../index.html">Home</a></li>
						<li class="breadcrumb-item active">Forms</li>
					</ul>
				</div>				
			</header>

			<div class="col-sm-6">
			<div class="row">
				<div class="col-12">

				</div>

				
			
			</div><!-- row -->
			</div>

		

				<div class="col-12">
					<section class="content-header">
						<p>Nama Kategori</p>
						<form class ="from-horizontal " action="../admin/module/kategori/aksi_tambah.php" method="POST">
						<input type="hidden" name = "id_kategori" value ="<?php echo $id_kategori; ?>">
					<input type = "text" id="namakategori" name= "nama_kategori" placeholder = "Masukkan nama Kategori" class="form form--focus-blue mt-0">
					<br>
					<br>
					<div class="box-footer">
		<button type="submit" class="btn btn-primary pull-right">Simpan</button>
	</div>
					
					</section>
</form>
				</div>
			</div><!-- row -->
			</div>
		</div><!-- row -->
	</main>

