

	<!-- main -->
	<main class="main main--ml-sidebar-width">
		<div class="row">
			<header class="main__header col-12 mb-2">
				<div class="main__title">
					<h4>Laporan Donasi Program</h4>
					<ul class="breadcrumb">
				
					</ul>
                    <a href="<?php echo $base_url; ?>admin/module/LaporanProgram/CetakLaporanProgram.php">
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
						<th>Nama Program</th>
						<th>Waktu Mulai </th>
						<th>Waktu Selesai </th>
						<th>Pendapatan </th>
						<th>Target Pendapatan </th>
					   <?php
    // include "../../../../lib/config.php";
    // include "../../../../lib/koneksi.php";
    $query = mysqli_query($koneksi,"select * from transaksi where status_pembayaran='SETTLEMENT'");
    $queryjoin=mysqli_query($koneksi,"
    select tbl_program.*,transaksi.*,SUM(transaksi.jumlah_biaya) AS Jumlah
        FROM tbl_program
    LEFT JOIN transaksi ON tbl_program.id_program = transaksi.idprogram
    where transaksi.status_pembayaran='SETTLEMENT'
   ");
    while ($kp=mysqli_fetch_array($queryjoin)){
		?>
					<tr>
						<td><?php echo $kp['nama_program']; ?></td>
                        <td><?php echo $kp['tanggal_mulai'];?></td>
                        <td><?php echo $kp['tanggal_selesai'];?></td>
                        <td><?php echo $kp['Jumlah'];?></td>
						<td><?php echo $kp['dana_program'];?></td>
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

