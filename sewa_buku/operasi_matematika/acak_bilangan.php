<?php
    echo rand(10, 100)."<br>";        //mengacak angka dengan range tertentu
    echo mt_rand(1000, 9999)."<br>";  //mengacak angka dengan nilai yang lebih besar dari rand()
    echo str_shuffle("123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz")."<br>";
?>
