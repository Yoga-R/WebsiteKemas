<?php
session_start();
if (empty($_SESSION['username'])AND empty ($_SESSION['passuser'])) {
    echo"<center > untuk mengakses modul ini andha harus login<br>";
    echo"<a href =../../index.php><b>LOGIN</b></a></center>";
} else {
    include "../../../lib/config.php";
    include "../../../lib/koneksi.php";

    $iddonasi=$_GET['id_donasi'];
   

    $queryHapus = mysqli_query($koneksi, "DELETE from tbl_program WHERE id_program='$iddonasi'");
 

    if ($queryHapus){
        echo "<script> alert ('Data Kabupaten Berhasil dihapus'); window.location ='$admin_url'+ 'adminweb.php?module=kabupaten';</script>";
    }else {
        echo "<script> alert ('Data Kabupaten gagal dihapus'); window.location ='$admin_url'+ 'adminweb.php?module=kabupaten';</script>";
    }
}
    ?>