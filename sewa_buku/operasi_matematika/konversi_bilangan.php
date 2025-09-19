<?php
    echo bindec("100011")."<br>";
    echo bindec("100")."<br>";     //fungsi untuk konversi bil. biner ke bil. desimal
    echo decbin(11)."<br>";        //fungsi untuk konversi bil. desimal ke bil. biner
    echo decoct(10)."<br>";        //fungsi untuk konversi bil. desimal ke bil oktal
    echo octdec(12)."<br>";        //fungsi untuk konversi bil. oktal ke bil. desimal
    echo dechex(20)."<br>";        //fungsi untuk konversi bil. desimal ke bil. heksadesimal
    echo hexdec(14)."<br>";        //fungsi untuk konversi bil. heksadesimal ke bil. desimal
    echo number_format(453000000, 2)."<br>";       //menentukan format bilangan
    echo number_format(453000000, 2, ",",".")."<br>";   //menentukan format bilangan
?>
