<?php
namespace Midtrans;
include "koneksi.php";
include "config.php";
require_once dirname(__FILE__) . '/../vendor/midtrans/midtrans-php/Midtrans.php';
Config::$isProduction = false;
Config::$serverKey = 'SB-Mid-server-ii1gBdtLV-5JFdb11U_lyE1O';
$orderId=$_GET['order_id'];
$status = \Midtrans\Transaction::status($orderId);
// $result=var_dump($status);
// var_export($status, true);
    $i=0;
foreach($status as $k=>$val){
    if($k=="transaction_time"){
    $string[$i]=$val;
    echo $k." ".$i." ".$val."<br>";
    }else if($k=="gross_amount"){
        $string[$i]=$val;
    echo $k." ".$i." ".$val."<br>";    
    }else if($k=="payment_type"){
        $string[$i]=$val;
        echo $k." ".$i." ".$val."<br>";
    }else if($k=="transaction_status"){
        $string[$i]=$val;
        echo $k." ".$i." ".$val."<br>";
    }else if($k=="transaction_id"){
        $string[$i]=$val;
        echo $k." ".$i." ".$val."<br>";
    }else{
        continue;
    }
    $i++;
}
// $var = json_decode($status, true);
$queryedit =mysqli_query($koneksi, "UPDATE transaksi SET id_transaction='$string[3]',pilihan_pembayaran='$string[2]',status_pembayaran='$string[4]',waktu_pembayaran='$string[0]',jumlah_biaya='$string[1]' WHERE orderid='$orderId'");
// $querytambah = mysqli_query($koneksi, "INSERT INTO transaksi (id_transaction,pilihan_pembayaran,status_pembayaran,waktu_pembayaran,jumlah_biaya) VALUES ('$string[3]','$string[2]','$string[4]','$string[0]','$string[1]')");
if ($queryedit){
    echo "<script> alert ('Dana Berhasil ditambahkan'); window.location ='../index.php';</script>";
}
echo "<br> test".$string[0];
echo $var["transaction_time"];
echo $var["transaction_id"];
echo $var["gross_amount"];
echo $var["payment_type"];
echo $var["transaction_status"];
?>