<?php
include "../lib/koneksi.php";
include "../lib/config.php";

$email = trim($_POST['email']);
$password = trim($_POST['password']);
// pastikan username dan password adalah berupa huruf atau angka.

if (empty($email) or empty($password)) {
    echo "
    <script> 
    alert('Isi Username dan Password!'); 
        window.location = '../register_pilih.php';
    </script>
    ";
} else {
    $login = mysqli_query($koneksi, "SELECT * FROM tbl_donatur WHERE email='$email' AND password=md5('$password') ");
    $ketemu = mysqli_num_rows($login);
    $r = mysqli_fetch_array($login);
  

    if ($ketemu > 0) {
        session_start(); 
        $_SESSION['email'] = $r['email'];
        $_SESSION['password'] = $r['password'];
    
  
         //login sebagai admin
            header("location:../index.php");
       

    }
    else {
        echo    "<script>
        alert('Username Dan Password Salah'); 
                    window.location = '../index.php';
                    </script>";
                }
    }

?>
    

