<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    // membuat fungsi
    function perkenalan($nama, $salam){
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";
        echo "Senang berkenalan dengan anda<br/>";
    }

    // memanggil fungsi yang sudah dibuat
    perkenalan("Ganang", "Hi");

    echo "<hr>";

    $saya = "Indry";
    $ucapanSalam = "Selamat pagi";
    // memanggilnya lagi
    perkenalan($saya, $ucapanSalam);
?>
</body>
</html>
