<?php
include "../lib/koneksi.php";
include "../lib/config.php";

$username = $_POST['username'];
$password = $_POST['password'];
// pastikan username dan password adalah berupa huruf atau angka.
 
if (!ctype_alnum($username) OR !ctype_alnum($password)) {
    echo "
    <script> 
        window.location = '../admin/gagal.php?gagal=login1';
    </script>
    ";
} else {
    $login = mysqli_query($koneksi, "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password' ");
    $ketemu = mysqli_num_rows($login);
    $r = mysqli_fetch_array($login);

    // Apabila username dan password ditemukan
    if ($ketemu > 0) {
        session_start();
        $_SESSION['password'] = $r['username'];
        $_SESSION['password'] = $r['password'];
        header ("location:adminweb.php?module=home&idadmin=$r[username]");
    } else {
        echo "
        <script> 
            window.location = '../admin/gagal.php?gagal=login2';
        </script>
        ";
    }
}

?> 