
  <?php  
session_start();
if (empty($_SESSION['username'])AND empty ($_SESSION['password'])) {
    echo"<center > untuk mengakses modul ini andha harus login<br>";
    echo"<a href =../../index.php><b>LOGIN</b></a></center>";
} else { 
  include "../../../lib/config.php";
include "../../../lib/koneksi.php";
$iddonasi=$_POST['id_donasi'];
$namaprog = $_POST['nama_program'];
$namakategori = $_POST['namakategori'];
$detail = $_POST['detail'];
$totaldana = $_POST['total_dana'];
$tanggalmulai = $_POST['tanggalmulai'];
$tanggalselesai = $_POST['tanggalselesai'];
$foto1 = $_POST['foto1'];
$foto2 = $_POST['foto2']; 
    if ($namaprog ==""){  echo "<script> alert ('Data Program gagal diubah karena kosong'); window.location ='$admin_url'+ 'adminweb.php?module=edit_kabupaten&id_kabupaten='+'$id_kabupaten';</script>";
    
    } else{
    
    
    $queryedit =mysqli_query($koneksi, "UPDATE tbl_program SET nama_program='$namaprog',id_kategori='$namakategori', detail_program='$detail', dana_program='$totaldana',tanggal_mulai='$tanggalmulai',tanggal_selesai='$tanggalselesai' WHERE id_program='$iddonasi'");

    if ($queryedit){
        echo "<script> alert ('Data Program Berhasil diubah'); window.location ='$admin_url'+ 'adminweb.php?module=kabupaten';</script>";
    }else {
        echo "<script> alert ('Data Program gagal diubah'); window.location ='$admin_url'+ 'adminweb.php?module=edit_kabupaten&id_kabupaten='+'$id_kabupaten';</script>";
    }
    }
}
    ?>