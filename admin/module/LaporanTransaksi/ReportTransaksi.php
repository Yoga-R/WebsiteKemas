<?php
include('../../../lib/koneksi.php');
require_once("../../../vendor/dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"select * from transaksi where status_pembayaran='SETTLEMENT'");
$queryjoin=mysqli_query($koneksi,"
select tbl_donatur.*,tbl_program.*,transaksi.*
	FROM transaksi
LEFT JOIN tbl_donatur ON transaksi.idakun = tbl_donatur.id_donatur
LEFT JOIN tbl_program ON transaksi.idprogram = tbl_program.id_program
where status_pembayaran='SETTLEMENT'");
$html = '<center><h3>Daftar Transaksi Berhasil</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No</th>
 <th>Order ID</th>
 <th>Nama Donatur</th>
 <th>Nama Program</th>
 <th>Pemasukkan</th>
 <th>Tanggal</th>
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($queryjoin))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['orderid']."</td>
 <td>".$row['nama_lengkap']."</td>
 <td>".$row['nama_program']."</td>
 <td>".$row['jumlah_biaya']."</td>
 <td>".$row['waktu_pembayaran']."</td>
 </tr>";
 $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_transaksiberhasil.pdf');
?>