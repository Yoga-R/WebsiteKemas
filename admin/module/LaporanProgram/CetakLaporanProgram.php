<?php
include('../../../lib/koneksi.php');
require_once("../../../vendor/dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"select * from transaksi where status_pembayaran='SETTLEMENT'");
$queryjoin=mysqli_query($koneksi,"
select tbl_program.*,transaksi.*,SUM(transaksi.jumlah_biaya) AS Jumlah
    FROM tbl_program
LEFT JOIN transaksi ON tbl_program.id_program = transaksi.idprogram
where transaksi.status_pembayaran='SETTLEMENT'
");
$html = '<center><h3>Laporan Pendapatan Setiap Program</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No</th>
 <th>Nama Program</th>
 <th>Tanggal Mulai</th>
 <th>Tanggal Selesai</th>
 <th>Pendapatan</th>
 <th>Target Dana</th>
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($queryjoin))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['nama_program']."</td>
 <td>".$row['tanggal_mulai']."</td>
 <td>".$row['tanggal_selesai']."</td>
 <td>".$row['Jumlah']."</td>
 <td>".$row['dana_program']."</td>
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
$dompdf->stream('Laporan_Program.pdf');
?>