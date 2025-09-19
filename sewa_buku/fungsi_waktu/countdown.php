<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
date_default_timezone_set("Asia/Jakarta"); // mengatur time zone untuk WIB
$batas_pembayaran = strtotime("14 November 2020 12:16:54 +1 days"); //batas waktu pembayaran 1 hari setelah transaksi
$waktu_saat_ini = strtotime("now"); //waktu saat ini
$selisih = $batas_pembayaran - $waktu_saat_ini; // mencari selisih detik antara kedua waktu

$hari = floor($selisih / 86400);        //mencari jumlah hari

$sisa = $selisih % 86400;              //mencari jumlah jam
$jam = floor($selisih / 3600);

$sisa = $sisa % 3600;                  //mencari jumlah menit
$menit = floor($sisa / 60); //echo $menit;

$sisa = $sisa % 60;                    //mencari jumlah detik
$detik = floor($sisa / 1);

echo "Sisa waktu untuk melakukan pembayaran : ".$hari." hari ".$jam." jam ".$menit." menit ".$detik." detik lagi";
?>
</body>
</html>
