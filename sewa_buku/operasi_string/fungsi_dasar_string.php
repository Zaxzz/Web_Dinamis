<?php
$kalimat = "selamat pagi...";

echo strlen($kalimat)."<br>";        //strlen untuk menghitung jumlah karakter
echo strtoupper($kalimat)."<br>";   //strtoupper untuk menjadikan huruf kapital
echo strtolower($kalimat)."<br>";   //strtolower untuk menjadikan huruf kecil
echo ucfirst($kalimat)."<br>";      //ucfirst untuk menjadikan huruf besar huruf pertama sebuah kalimat
echo ucwords($kalimat)."<br>";      //ucwords untuk menjadikan huruf besar huruf pertama sebuah kata
echo substr($kalimat, 2, 4)."<br>"; //substr untuk mendapatkan bagian dari string
echo substr_count($kalimat, "a")."<br>"; //substr_count untuk menghitung jumlah karakter
echo strpos($kalimat, "p")."<br>";  //strpos untuk mengetahui posisi sebuah karakter dalam string
echo strrev($kalimat)."<br>";       //strrev untuk membalik string
echo str_replace("pagi", "siang", $kalimat)."<br>"; //str_replace untuk mengganti bagian string
?>
