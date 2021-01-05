

	<!-- main -->
	<main class="main main--ml-sidebar-width">
		<div class="row">
			<header class="main__header col-12 mb-2">
				<div class="main__title">
					<h4>Edit Kabupaten</h4>
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
		<?php 
		$iddonasi = $_GET ['id_donasi'];
		$queryEdit=mysqli_query ($koneksi, " SELECT * FROM tbl_program WHERE id_program='$iddonasi'");
		
	
		$hasilquery=mysqli_fetch_array($queryEdit);
		$namaprog = $hasilquery['nama_program'];
		$namakategori = $hasilquery['id_kategori'];
		$detail = $hasilquery['detail_program'];
		$totaldana = $hasilquery['dana_program'];
		$tanggalmulai = $hasilquery['tanggal_mulai'];
		$tanggalselesai = $hasilquery['tanggal_selesai'];
		$foto1 = $hasilquery['foto1'];
		$foto2 = $hasilquery['foto2'];
		?>
		
		

				<div class="col-12">
					<!-- <input type = "text" id="namakab" name= "nama_kabupaten" placeholder = "Nama Kabupaten" class="form form--focus-blue mt-0" value=" <?= $nama_kabupaten; ?>"> -->
					<section class="content-header">
					<p>Nama Kategori</p>
						<form class ="from-horizontal " action="../admin/module/donasi/aksi_edit.php" method="POST">
						<select name="namakategori" class="form form--focus-blue">
						<?php
						$kueriprogram=mysqli_query ($koneksi, "select * from tbl_kategori");
						while ($kp=mysqli_fetch_array($kueriprogram)){
							?>
							<option selected="">Pilih Kategori</option>
							<option value="<?php echo $kp['nama_kategori']; ?>"><?php echo $kp['nama_kategori']; ?></option>
	<?php }?>
						</select>
					<br>
					<br>
							<input type="hidden" name = "id_donasi" value ="<?php echo $iddonasi; ?>">
						<p>Nama Program Donasi</p>
						<!-- <form class ="from-horizontal " action="../admin/module/kabupaten/aksi_tambah.php" method="POST"> -->
						<!-- <input type="hidden" name = "id_kabupaten" value ="<?php echo $id_kabupaten; ?>"> -->
						<input value=" <?= $namaprog; ?>"value type = "text" id="namaprogram" name= "nama_program" placeholder = "Masukkan nama program donasi" class="form form--focus-blue mt-0">
					<br>
					<br>
						<p>Detail</p>
						<!-- <form class ="from-horizontal " action="../admin/module/kabupaten/aksi_tambah.php" method="POST"> -->
						<!-- <input type="hidden" name = "id_kabupaten" value ="<?php echo $id_kabupaten; ?>"> -->
						<!-- <input type = "text" id="namabrand" name= "nama_kabupaten" placeholder = "Masukkan foto" class="form form--focus-blue mt-0"> -->
						<textarea name="detail" class="form form--focus-blue" placeholder="Detail Program ..."><?= $detail; ?></textarea>
					<br>
					<br>
						<p>Total Dana Dibutuhkan</p>
						<!-- <form class ="from-horizontal " action="../admin/module/kabupaten/aksi_tambah.php" method="POST"> -->
						<!-- <input type="hidden" name = "id_kabupaten" value ="<?php echo $id_kabupaten; ?>"> -->
						<input value=" <?= $totaldana; ?>" type = "text" id="totaldana" name= "total_dana" placeholder = "Masukkan total dana" class="form form--focus-blue mt-0">
					<br>
					<br>
						<div class="row">
							<div class="col-3">
						<p>Tanggal Mulai</p>
						<!-- <form class ="from-horizontal " action="../admin/module/kabupaten/aksi_tambah.php" method="POST"> -->
						<!-- <input type="hidden" name = "id_kabupaten" value ="<?php echo $id_kabupaten; ?>"> -->
						<!-- <input type = "text" id="namabrand" name= "nama_kabupaten" placeholder = "Masukkan total dana yang dibutuhkan" class="form form--focus-blue mt-0"> -->
						<input value="<?php echo date('Y-m-d\TH:i:sP', $tanggalmulai);?>" type="datetime-local" id="tanggalmulai" name="tanggalmulai">
					</div>
					<div class="col-4">
						<p>Tanggal Selesai</p>
					<input value=" <?= $tanggalselesai; ?>"type="datetime-local" id="tanggalselesai" name="tanggalselesai">
					</div>
					</div>
					<br>
					<br>
					<!-- <section class="content-header"> -->
						<p>Foto Sampul</p>
						<!-- <form class ="from-horizontal " action="../admin/module/donasi/aksi_tambah.php" method="POST"> -->
						<!-- <input type="hidden" name = "id_kabupaten" value ="<?php echo $id_kabupaten; ?>"> -->
					<!-- input type = "text" id="namabrand" name= "nama_kabupaten" placeholder = "Masukkan durasi yang dibutuhkan" class="form form--focus-blue mt-0"> -->
						<input type="file" name="foto1" class="form form--focus-blue">
					<br>
					<br>
					<!-- <section class="content-header"> -->
						<p>Foto Detail</p>
						<!-- <form class ="from-horizontal " action="../admin/module/kabupaten/aksi_tambah.php" method="POST"> -->
						<!-- <input type="hidden" name = "id_kabupaten" value ="<?php echo $id_kabupaten; ?>"> -->
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

