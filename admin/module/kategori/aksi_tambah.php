<?php
include "../../../lib/config.php";
include "../../../lib/koneksi.php";

$namakategori = $_POST['nama_kategori'];
if ($namakategori ==""){  echo "<script> alert ('Data Kategori gagal dimasukkan karena data kosong'); window.location ='$admin_url'+ 'adminweb.php?module=tambah_brand';</script>";
    
} else{
$querytambah = mysqli_query($koneksi, "INSERT INTO tbl_kategori (nama_kategori ) VALUES ('$namakategori')");
if ($querytambah){
    echo "<script> alert ('Data kategori Berhasil ditambah'); window.location ='$admin_url'+ 'adminweb.php?module=brand';</script>";
}else {
    echo "<script> alert ('Data kategori gagal ditambah'); window.location ='$admin_url'+ 'adminweb.php?module=brand';</script>";
}
}
?>