
  <?php  
session_start();
if (empty($_SESSION['username'])AND empty ($_SESSION['password'])) {
    echo"<center > untuk mengakses modul ini andha harus login<br>";
    echo"<a href =../../index.php><b>LOGIN</b></a></center>";
} else {
  include "../../../lib/config.php";
include "../../../lib/koneksi.php";
$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];
    if ($nama_kategori ==""){  echo "<script> alert ('Data kategori gagal diubah karena kosong'); window.location ='$admin_url'+ 'adminweb.php?module=edit_kategori&id_kategori='+'$id_kategori';</script>";
    
    } else{
    
    
    $queryedit =mysqli_query($koneksi, "UPDATE tbl_kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'");

    if ($queryedit){
        echo "<script> alert ('Data Kategpri Berhasil diubah'); window.location ='$admin_url'+ 'adminweb.php?module=kategori';</script>";
    }else {
        echo "<script> alert ('Data Kategori gagal diubah'); window.location ='$admin_url'+ 'adminweb.php?module=edit_kategori&kategori='+'$id_kategori';</script>";
    }
    }
}
    ?>