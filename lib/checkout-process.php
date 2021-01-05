<?php

namespace Midtrans;
session_start();
if (empty($_SESSION['email'])AND empty ($_SESSION['password'])) {
    echo"<center > untuk mengakses modul ini andha harus login<br>";
    echo"<a href =../logindonatur.php><b>LOGIN</b></a></center>";
} else {
    include "config.php";
include "koneksi.php";
$tanggal=date('ymd');
$no="0001";
$query = mysqli_query($koneksi,"select max(orderid) as KodeTerbesar from transaksi");
$data = mysqli_fetch_array($query);
$kodeunik=$data['KodeTerbesar'];
$urutan=(int)substr($kodeunik,0,6);
if($tanggal==$urutan){
    $kodeunik++;
}else{
    $kodeunik=$tanggal.$no;
}
require_once dirname(__FILE__) . '/../vendor/midtrans/midtrans-php/Midtrans.php';
//Set Your server key
Config::$serverKey = "SB-Mid-server-ii1gBdtLV-5JFdb11U_lyE1O";
$niliadonasi=$_POST['donasi'];
$id=$_POST['id'];
$nama=$_POST['nama'];
$user=$_POST['nama_user'];
$notelp=$_POST['notelp'];
$email=$_POST['email'];
$idakun=$_POST['id_akun'];
// $KodeOrder=$_POST['kodeorder'];
// Uncomment for production environment
// Config::$isProduction = true;

// Uncomment to enable sanitization
Config::$isSanitized = true;

// Uncomment to enable 3D-Secure
Config::$is3ds = true;

// Required
$transaction_details = array(
    'order_id' => $kodeunik,
    'gross_amount' => $niliadonasi, // no decimal allowed for creditcard
);

// Optional
$item1_details = array(
    'id' => $id,
    'price' => $niliadonasi,
    'quantity' => 1,
    'name' => $nama
);

// Optional
$item2_details = array(
    'id' => 'a2',
    'price' => 20000,
    'quantity' => 1,
    'name' => "Orange"
);

// Optional
$item_details = array ($item1_details);

// Optional
$billing_address = array(
    'first_name'    => "Andri",
    // 'last_name'     => "Litani",
    'address'       => "Mangga 20",
    // 'city'          => "Jakarta",
    // 'postal_code'   => "16602",
    'phone'         => "081122334455",
    // 'country_code'  => 'IDN'
);

// Optional
$shipping_address = array(
    'first_name'    => "Obet",
    'last_name'     => "Supriadi",
    'address'       => "Manggis 90",
    'city'          => "Jakarta",
    'postal_code'   => "16601",
    'phone'         => "08113366345",
    'country_code'  => 'IDN'
);

// Optional
$customer_details = array(
    'first_name'    => $user,
    // 'last_name'     => "Litani",
    'email'         => $email,
    'phone'         => $notelp,
    // 'billing_address'  => $billing_address,
    // 'shipping_address' => $shipping_address
);

// Fill SNAP API parameter
$params = array(
    'transaction_details' => $transaction_details,
    'customer_details' => $customer_details,
    'item_details' => $item_details,
);

try {
    $querytambah = mysqli_query($koneksi, "INSERT INTO transaksi (orderid,idakun,idprogram,id_transaction,pilihan_pembayaran,status_pembayaran,waktu_pembayaran,jumlah_biaya) 
    VALUES ('$kodeunik','$idakun','$id',0,0,0,0,$niliadonasi)");
    // Get Snap Payment Page URL
    $paymentUrl = Snap::createTransaction($params)->redirect_url;
  
    // Redirect to Snap Payment Page
    header('Location: ' . $paymentUrl);
}
catch (Exception $e) {
    echo $e->getMessage();
}
}