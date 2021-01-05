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
		
		//user
		$user = $_SESSION ['email'];
                                    $queryuser_session = mysqli_query ($koneksi, "select * from tbl_donatur WHERE email = '$user'");
                                    $hasilQuery_session = mysqli_fetch_array($queryuser_session);
									$nama_session = $hasilQuery_session ['nama_lengkap'];
									$notelp_session = $hasilQuery_session ['no_telp'];
									$email_session = $hasilQuery_session ['email'];
									$id_session = $hasilQuery_session ['id_donatur'];
        ?>
<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title"><?=$namaprog; ?> <span class="title-under"></span></h1>
			<p class="page-description">
				<?= $tanggalmulai;?>-<?=$tanggalselesai;?>
			</p>
			
		</div>

	</div>

	<div class="main-container">
		<div class="container">
			<div class="row">
				

				<div class="col-md-12 fadeIn animated">
					<div id="cause-carousel" class="carousel slide cause-carousel" data-ride="carousel">

						  <!-- Indicators -->


						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">

						    <div class="item active">

						      <img src="images/produk/<?php echo $hasilquery['foto1']?>" alt="">
						      
						    </div>

						    

						  </div>
					</div>

                </div>
            </div>

			<div class="row fadeIn animated">

				<div class="col-md-12">

					<h2 class="title-style-2">Deskripsi<span class="title-under"></span></h2>

					<p>
						<?= $detail;?>
					</p>

				</div>

            </div>
            <div class="row fadeIn animated">

				<div class="col-md-6">

					<h2 class="title-style-2">Total Dana<span class="title-under"></span></h2>

					<p>
						<?= $totaldana;?>
					</p>

                </div>
                <div class="col-md-6">

					<h2 class="title-style-2">Donasi<span class="title-under"></span></h2>
					<form action="lib/checkout-process.php" method="POST">
                                    <div class="form-group">
                                        <label for="name">Masukkan Jumlah Donasi</label>
										<input type="hidden" name="nama" value=<?= $namaprog; ?>>
										<input type="hidden" name="id" value=<?= $iddonasi; ?>>
										<!-- <input type="hidden" name="kodeorder" value=<?= $KodeOrder; ?>> -->
										<input type="hidden" name="id_akun" value=<?= $id_session; ?>>
										<input type="hidden" name="nama_user" value=<?= $nama_session; ?>>
										<input type="hidden" name="notelp" value=<?= $notelp_session; ?>>
										<input type="hidden" name="email" value=<?= $email_session; ?>>
                                        <input type="number" id="donasi" name="donasi" class="form-control" placeholder="Masukkan Donasi Terbaikmu" required>
                                    </div>
					<p>
                    <!-- <button class="btn btn-primary" type="button"><i class=" mr-2"></i>Donasi Sekarang</button> -->
					<input type="submit" value="Pay with Snap Redirect">
					</p>
					</form>
				</div>

            </div>
            
            

		</div>

	</div> <!-- /.main-container  -->