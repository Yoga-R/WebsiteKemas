

	<!-- main -->
	<main class="main main--ml-sidebar-width">
		<div class="row">
			<header class="main__header col-12 mb-2">
				<div class="main__title">
					<h4>Tambah Program Donasi</h4>
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
						<form class ="from-horizontal " action="../admin/module/donasi/aksi_tambah.php" method="POST" enctype="multipart/form-data">
						<select name="namakategori" class="form form--focus-blue">
						<?php
						$kueriprogram=mysqli_query ($koneksi, "select * from tbl_kategori");
    while ($kp=mysqli_fetch_array($kueriprogram)){
		?>
							<option selected="">Pilih Kategori</option>
							<option value="<?php echo $kp['id_kategori']; ?>"><?php echo $kp['nama_kategori']; ?></option>
	<?php }?>
						</select>
					<br>
					<br>
						<p>Nama Program Donasi</p>
						<!-- <form class ="from-horizontal " action="../admin/module/kabupaten/aksi_tambah.php" method="POST"> -->
						<!-- <input type="hidden" name = "id_kabupaten" value ="<?php echo $id_kabupaten; ?>"> -->
						<input type = "text" id="namaprogram" name= "nama_program" placeholder = "Masukkan nama program donasi" class="form form--focus-blue mt-0">
					<br>
					<br>
						<p>Detail</p>
						<!-- <form class ="from-horizontal " action="../admin/module/kabupaten/aksi_tambah.php" method="POST"> -->
						<!-- <input type="hidden" name = "id_kabupaten" value ="<?php echo $id_kabupaten; ?>"> -->
						<!-- <input type = "text" id="namabrand" name= "nama_kabupaten" placeholder = "Masukkan foto" class="form form--focus-blue mt-0"> -->
						<!-- <textarea name="detail" class="form form--focus-blue" placeholder="Detail Program ..."></textarea> -->
						<!-- tambahan ckeditor -->
						<textarea name="detail" class="form form--focus-blue editor"></textarea>
					<br>
					<br>
						<p>Total Dana Dibutuhkan</p>
						<!-- <form class ="from-horizontal " action="../admin/module/kabupaten/aksi_tambah.php" method="POST"> -->
						<!-- <input type="hidden" name = "id_kabupaten" value ="<?php echo $id_kabupaten; ?>"> -->
						<input type = "text" id="totaldana" name= "total_dana" placeholder = "Masukkan total dana" class="form form--focus-blue mt-0">
					<br>
					<br>
						<div class="row">
							<div class="col-3">
						<p>Tanggal Mulai</p>
						<!-- <form class ="from-horizontal " action="../admin/module/kabupaten/aksi_tambah.php" method="POST"> -->
						<!-- <input type="hidden" name = "id_kabupaten" value ="<?php echo $id_kabupaten; ?>"> -->
						<!-- <input type = "text" id="namabrand" name= "nama_kabupaten" placeholder = "Masukkan total dana yang dibutuhkan" class="form form--focus-blue mt-0"> -->
						<input type="datetime-local" id="tanggalmulai" name="tanggalmulai">
					</div>
					<div class="col-4">
						<p>Tanggal Selesai</p>
					<input type="datetime-local" id="tanggalselesai" name="tanggalselesai">
					</div>
					</div>
					<br>
					<br>
					<!-- <section class="content-header"> -->
						<p>Foto Sampul</p>
						<!-- <form class ="from-horizontal " action="../admin/module/donasi/aksi_tambah.php" method="POST"> -->
						<input type="hidden" name = "id_kabupaten" value ="<?php echo $id_kabupaten; ?>">
					<!-- input type = "text" id="namabrand" name= "nama_kabupaten" placeholder = "Masukkan durasi yang dibutuhkan" class="form form--focus-blue mt-0"> -->
						<input type="file" name="foto1" class="form form--focus-blue">
					<br>
					<br>
					<!-- <section class="content-header"> -->
						<p>Foto Detail</p>
						<!-- <form class ="from-horizontal " action="../admin/module/kabupaten/aksi_tambah.php" method="POST"> -->
						<input type="hidden" name = "id_kabupaten" value ="<?php echo $id_kabupaten; ?>">
					<!-- <input type = "text" id="namabrand" name= "nama_kabupaten" placeholder = "Masukkan durasi yang dibutuhkan" class="form form--focus-blue mt-0"> -->
						<input type="file" name="foto2" class="form form--focus-blue">
					<br>
					<br>
					<div class="box-footer">
		<button type="submit" class="btn btn-primary pull-right">Simpan</button>
	</div>
					
</form>
					</section>
				</div>
			</div><!-- row -->
			</div>
		</div><!-- row -->
	</main>

