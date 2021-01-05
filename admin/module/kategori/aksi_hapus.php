<?php
session_start();
if (empty($_SESSION['username'])AND empty ($_SESSION['passuser'])) {
    echo"<center > untuk mengakses modul ini andha harus login<br>";
    echo"<a href =../../index.php><b>LOGIN</b></a></center>";
} else {
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $idkategori = $_GET ['id_kategori'];
  
    $queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_kategori  WHERE id_kategori='$idkategori'");
 

    if ($queryHapus){
        echo "<script> alert ('Data Kategori Berhasil dihapus'); window.location ='$admin_url'+ 'adminweb.php?module=brand';</script>";
    }else {
        echo "<script> alert ('Data Kategori gagal dihapus'); window.location ='$admin_url'+ 'adminweb.php?module=brand';</script>";
    }
}
    ?>