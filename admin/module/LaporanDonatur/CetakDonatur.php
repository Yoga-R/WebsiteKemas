<?php
include('../../../lib/koneksi.php');
require_once("../../../vendor/dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$kuerikategori=mysqli_query ($koneksi, "select * from tbl_donatur");

$html = '<center><h3>Daftar Donatur</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr> 
 <th>No</th>
 <th>Nama Donatur</th>
 <th>Alamat</th>
 <th>No Telepon</th>
 <th>Email</th>
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($kuerikategori))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['nama_lengkap']."</td>
 <td>".$row['alamat']."</td>
 <td>".$row['no_telp']."</td>
 <td>".$row['email']."</td>
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
$dompdf->stream('Laporan_Donatur.pdf');
?>
