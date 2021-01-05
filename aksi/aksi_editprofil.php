<?php
include "../lib/koneksi.php";
include "../lib/config.php"; 
        $email=$_POST['email'];
        $iddonasi=$_POST['iddonatur'];
        $queryuser_session = mysqli_query ($koneksi, "select * from tbl_donatur WHERE email = '$email'");
        $hasilQuery_session = mysqli_fetch_array($queryuser_session);
        $namalengkap = $_POST ['nama_lengkap'];
        $notelp = $_POST ['nomorhandphone'];
        $alamat= $_POST['alamat'];
        $password = $_POST['password'];

if ($namalengkap ==""){  echo "<script> alert ('Data Program gagal diubah karena kosong'); window.location ='$admin_url'+ 'adminweb.php?module=edit_kabupaten&id_kabupaten='+'$id_kabupaten';</script>";
    
} else{
 
if($password==""){
    $queryedit =mysqli_query($koneksi, "UPDATE tbl_donatur SET nama_lengkap='$namalengkap',no_telp='$notelp', alamat='$alamat', email='$email' WHERE id_donatur='$iddonasi'");
}else{
$queryedit =mysqli_query($koneksi, "UPDATE tbl_donatur SET nama_lengkap='$namalengkap',no_telp='$notelp', alamat='$alamat', email='$email',password='$password' WHERE id_donatur='$iddonasi'");
}
if ($queryedit){
    echo "<script> alert ('Data Diri Berhasil diubah'); window.location ='../datadiridonatur.php';</script>";
}else {
    echo "<script> alert ('Data Diri gagal diubah'); window.location ='$admin_url'+ 'adminweb.php?module=edit_kabupaten&id_kabupaten='+'$id_kabupaten';</script>";
}
}
?>