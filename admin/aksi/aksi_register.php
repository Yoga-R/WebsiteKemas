<?php
include "../lib/koneksi.php";
include "../lib/config.php";

$namalengkap = trim($_POST['namalengkap']);

$alamat = trim($_POST['alamat']);
$email = trim($_POST['email']);
$no_telp = trim($_POST['nomorhandphone']);
$password = trim($_POST['password']);
$confirmpassword = trim($_POST['confirmpassword']);


if (!empty($email)) {
    $querycek = mysqli_query($koneksi, "SELECT * FROM tbl_donatur WHERE nama_lengkap='$email'");
    $ketemu = mysqli_num_rows($querycek);
    if ($ketemu > 0) {
        echo    "<script>alert
    alert('email sudah terdaftar!'); 
    window.location = '../index.php';
    </script>";
    }
}
if($password != $confirmpassword){
    echo    "<script>alert
    alert('Password tidak sesuai!'); 
    window.location = '../index.php';
    </script>";
}

if (
    empty($namalengkap) or empty($email) or empty($password)
) {
    echo    "<script>alert
    alert('Data Harus di Isi Penuhui!'); 
    window.location = '../index.php';
    </script>";
} else {
    $querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_donatur (id_donatur,nama_lengkap,alamat,no_telp,email,password)
    VALUES ('','$namalengkap','$alamat','$no_telp','$email',md5('$password'))");


    if ($querySimpan) {
        echo    "<script>alert
        alert('Akun Sudah berhasil dibuat :D, Silahkan login'); 
        window.location = '../index.php';
        </script>";
    } else {
        echo    "<script>
        alert('Akun Gagal dibuat, Cek data anda'); 
                    ('Data Gagal Dimasukkan');
                    window.location = '../index.php';
                    </script>";
    }
}
